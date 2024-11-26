
    <!-- Include Bootstrap CSS and Custom Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Custom CSS for additional styling -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .btn-create-quiz {
            background-color: #198754;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .modal-header {
            background-color: #343a40;
            color: #ffffff;
        }

        .modal-content {
            border-radius: 8px;
        }

        .question-block {
            background-color: #f1f3f5;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .question-block h5 {
            font-weight: bold;
            color: #495057;
        }

        .answers-container {
            margin-top: 15px;
        }

        .answer-block {
            margin-bottom: 10px;
        }

        .btn-add-question,
        .btn-add-answer {
            background-color: #0d6efd;
            color: #ffffff;
        }

        .btn-remove-question,
        .btn-remove-answer {
            background-color: #dc3545;
            color: #ffffff;
        }
    </style>

    <div class="container my-5">
        <!-- Button to trigger modal -->
        <button type="button" class="btn btn-create-quiz" data-bs-toggle="modal" data-bs-target="#quizModal">
            <i class="bi bi-plus-circle"></i> Create New Quiz
        </button>

        <!-- Modal for creating the quiz -->
        <div class="modal fade" id="quizModal" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create a New Quiz</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="quizForm">
                            @csrf


                            <!-- Quiz Title -->
                            <div class="mb-4">
                                <label for="title" class="form-label">Quiz Title:</label>
                                <input type="text" id="lecture_id_model"   name="lecture_id" id="title" class="form-control" value="5"
                                    placeholder="Enter quiz title" required>
                            </div>

                            <!-- Quiz Title -->
                            <div class="mb-4">
                                <label for="title" class="form-label">Quiz Title:</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Enter quiz title" required>
                            </div>

                            <!-- Questions Container -->
                            <div id="questions-container">
                                <h4 class="mb-3">Questions</h4>
                                <button type="button" class="btn btn-add-question mb-4" id="add-question-btn">
                                    <i class="bi bi-plus-circle"></i> Add Question
                                </button>
                            </div>

                            <!-- Submit Button -->
                            <!-- Submit Button -->
                            <button type="button" class="btn btn-success w-100" id="submitQuiz">Save Quiz</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include Bootstrap JS and Icons -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- JavaScript for dynamic form and validation -->
        <script>
            $(document).ready(function() {
                let questionIndex = 0;



                $('#submitQuiz').on('click', function(event) {
                    event.preventDefault();

                    if (!validateCorrectAnswers()) return;

                    $.ajax({
                        url: "{{ route('quizzes.store') }}",
                        type: "POST",
                        data: $('#quizForm').serialize(),
                        success: function(response) {
                            alert("Quiz created successfully!");
                            $('#quizModal').modal('hide');
                            $('#quizForm')[0].reset();
                            $('#questions-container').empty();
                        },
                        error: function(xhr) {
                            alert("An error occurred: " + xhr.responseText);
                        }
                    });
                });













                // Add new question
                $('#add-question-btn').on('click', function() {
                    const questionTemplate = `
                <div class="question-block" data-index="${questionIndex}">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5>Question ${questionIndex + 1}</h5>
                        <button type="button" class="btn btn-remove-question btn-sm" onclick="removeQuestion(this)">
                            <i class="bi bi-trash-fill"></i> Remove Question
                        </button>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Question Text:</label>
                        <input type="text" class="form-control" name="questions[${questionIndex}][question_text]" placeholder="Enter question text" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Question Type:</label>
                        <select class="form-select question-type" name="questions[${questionIndex}][question_type]" onchange="adjustAnswers(${questionIndex})">
                            <option value="multiple_choice">Multiple Choice</option>
                            <option value="true_false">True/False</option>
                        </select>
                    </div>
                    <div class="answers-container">
                        <h6>Answers</h6>
                        <button type="button" class="btn btn-add-answer btn-sm mb-3" onclick="addAnswer(${questionIndex})">
                            <i class="bi bi-plus-circle"></i> Add Answer
                        </button>
                    </div>
                </div>`;

                    $('#questions-container').append(questionTemplate);
                    questionIndex++;
                });

                // Adjust answer options based on question type
                window.adjustAnswers = function(questionIndex) {
                    const questionBlock = $(`[data-index="${questionIndex}"]`);
                    const questionType = questionBlock.find('.question-type').val();
                    const answersContainer = questionBlock.find('.answers-container');
                    answersContainer.find('.answer-block').remove();

                    if (questionType === 'true_false') {
                        // For True/False questions, add True and False options automatically
                        addAnswer(questionIndex, 'True', false, true);
                        addAnswer(questionIndex, 'False', false, true);
                        answersContainer.find('.btn-add-answer').hide();
                    } else {
                        // For Multiple Choice, allow up to 4 options
                        answersContainer.find('.btn-add-answer').show();
                    }
                };

                // Add an answer to a question
                window.addAnswer = function(questionIndex, predefinedText = '', isCorrect = false, autoAdd = false) {
                    const questionBlock = $(`[data-index="${questionIndex}"]`);
                    const answersContainer = questionBlock.find('.answers-container');
                    const answerIndex = answersContainer.find('.answer-block').length;

                    const questionType = questionBlock.find('.question-type').val();
                    const maxAnswers = questionType === 'true_false' ? 2 : 4;

                    if (answerIndex >= maxAnswers && !autoAdd) {
                        alert(`You can only add up to ${maxAnswers} answers for this question type.`);
                        return;
                    }

                    const answerTemplate = `
                <div class="answer-block input-group mb-2">
                    <input type="text" class="form-control" name="questions[${questionIndex}][answers][${answerIndex}][answer_text]" placeholder="Answer text" value="${predefinedText}" required>
                    <div class="input-group-text">
                        <input type="checkbox" name="questions[${questionIndex}][answers][${answerIndex}][is_correct]" class="is-correct-checkbox" value="1" ${isCorrect ? 'checked' : ''}> Correct
                    </div>
                    ${questionType !== 'true_false' ? `<button type="button" class="btn btn-remove-answer" onclick="removeAnswer(this)">
                                        <i class="bi bi-trash"></i>
                                    </button>` : ''}
                </div>`;

                    answersContainer.append(answerTemplate);
                };

                // Validate that each question has at least one correct answer
                function validateCorrectAnswers() {
                    let isValid = true;

                    $('.question-block').each(function() {
                        const correctAnswers = $(this).find('.is-correct-checkbox:checked');
                        if (correctAnswers.length === 0) {
                            isValid = false;
                            alert("Each question must have at least one correct answer.");
                            return false;
                        }
                    });

                    return isValid;
                }

                // Form submission validation
                $('#quizForm').on('submit', function(event) {
                    if (!validateCorrectAnswers()) {
                        event.preventDefault();
                    }
                });

                // Remove question
                window.removeQuestion = function(button) {
                    $(button).closest('.question-block').remove();
                    updateQuestionNumbers();
                };

                // Remove answer
                window.removeAnswer = function(button) {
                    $(button).closest('.answer-block').remove();
                };

                // Update question numbers
                function updateQuestionNumbers() {
                    $('#questions-container .question-block').each(function(index) {
                        $(this).find('h5').text(`Question ${index + 1}`);
                    });
                }
            });
        </script>
    </div>

