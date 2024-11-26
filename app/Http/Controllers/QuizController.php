<?php
namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Answer;
use App\Models\Lecture;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{
    public function index()
    {


     // Fetch course with sections and lectures
     $quizzes = Lecture::with([
        'quizzes.questions.answers' => function ($query) {
            $query->orderBy('id');
        }
    ])->findOrFail(44);






        return  $quizzes ;
    }
    public function create()
    {
        return view('quizzes.create');
    }

    // public function store(Request $request)
    // {
    //     // Validate that 'title' and 'type' are present
    //     $request->validate([
    //         'title' => 'required|string',
    //         'type' => 'nullable|array',
    //         'label' => 'nullable|array',
    //         // Additional validations if necessary
    //     ]);
    
    //     // Create a new Quiz record
    //     $quiz = Quiz::create([
    //         'title' => $request->title,
    //     ]);
    
    //     // Initialize form data array for debugging or storage
    //     $form = [];
    //     $j = 0;
    
    //     // Check if 'type' is provided and is an array
    //     if (is_array($request->type)) {
    //         // Loop through each 'type' to create form items, questions, and answers
    //         for ($i = 0; $i < count($request->type); $i++) {
    //             // Prepare form item data
    //             $item = [
    //                 'index' => $i,
    //                 'label' => $request->label[$i] ?? '',
    //             ];
    
    //             // Save each question in the Question model with a reference to the Quiz
    //             $question = Question::create([
    //                 'quiz_id' => $quiz->id,
    //                 'question_text' => $item['label'],
    //                 'question_type' => $request->type[$i] ?? 'multiple_choice', // default type
    //             ]);
    
    //             // Handle answer options if the type requires them (like multiple choice)
    //             if (isset($request->option[$j]) && isset($request['options_'.$request->option[$j]])) {
    //                 $options = $request['options_'.$request->option[$j]];
                    
    //                 // Add options to the form item
    //                 $item['options'] = json_encode($options);
    
    //                 // Save each answer option in the Answer model with a reference to the Question
    //                 foreach ($options as $answerText) {
    //                    $answer= Answer::create([
    //                         'question_id' => $question->id,
    //                         'answer_text' => $answerText,
    //                         'is_correct' => isset($request->correct[$j]) && in_array($answerText, $request->correct[$j]) ? 1 : 0,
    //                     ]);

    //                     $answer->save();
    //                 }
    //                 $j++;
    //             }
    
    //             $question->save();


    //             $form[] = $item; // Add item to form array for debugging or storage
    //         }
    //     }
    
     
    //     $quiz->save();
    
    //     // Return success response or redirect
    //     return response()->json([
    //         'success' => true,
    //         'quiz_id' => $quiz->id,
    //         'data' => $form,
    //     ]);
    // }





    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'questions' => 'required|array',
            'questions.*.question_text' => 'required|string',
            'questions.*.question_type' => 'required|string|in:multiple_choice,true_false',
            'questions.*.answers' => 'required|array|min:1',
            'questions.*.answers.*.answer_text' => 'required|string',
            'questions.*.answers.*.is_correct' => 'nullable|boolean',
            'lecture_id' => 'nullable|exists:lectures,id', // Validate lecture_id if provided
        ]);

        // Create Quiz
        $quiz = Quiz::create([
            'title' => $request->title,
            'lecture_id' => $request->lecture_id ?? null, // Set lecture_id if provided
        ]);

        // Loop through questions and create them
        foreach ($request->questions as $questionData) {
            $question = $quiz->questions()->create([
                'question_text' => $questionData['question_text'],
                'question_type' => $questionData['question_type'],
            ]);

            // Loop through answers and create them
            foreach ($questionData['answers'] as $answerData) {
                $question->answers()->create([
                    'answer_text' => $answerData['answer_text'],
                    'is_correct' => isset($answerData['is_correct']) ? 1 : 0,
                ]);
            }
        }

return 1;
    }


    public function show(Quiz $quiz)
    {
        return view('quizzes.show', compact('quiz'));
    }

    public function edit(Quiz $quiz)
    {
        // Load related questions and answers for the quiz
        $quiz->load('questions.answers');
        return response()->json($quiz);
    }

    
    public function update(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
    
        $request->validate([
            'title' => 'required|string',
            'questions' => 'required|array',
            'questions.*.question_text' => 'required|string',
            'questions.*.question_type' => 'required|string|in:multiple_choice,true_false',
            'questions.*.answers' => 'required|array|min:1',
            'questions.*.answers.*.answer_text' => 'required|string',
            'questions.*.answers.*.is_correct' => 'nullable|boolean',
        ]);
    
        // Update the quiz title
        $quiz->title = $request->title;
        $quiz->save();
    
        // Handle questions and answers
        foreach ($request->questions as $questionData) {
            if (isset($questionData['id'])) {
                // Update existing question
                $question = Question::find($questionData['id']);
                $question->update([
                    'question_text' => $questionData['question_text'],
                    'question_type' => $questionData['question_type'],
                ]);
            } else {
                // Add new question
                $question = $quiz->questions()->create([
                    'question_text' => $questionData['question_text'],
                    'question_type' => $questionData['question_type'],
                ]);
            }
    
            // Handle answers for this question
            foreach ($questionData['answers'] as $answerData) {
                if (isset($answerData['id'])) {
                    // Update existing answer
                    $answer = Answer::find($answerData['id']);
                    $answer->update([
                        'answer_text' => $answerData['answer_text'],
                        'is_correct' => isset($answerData['is_correct']) ? 1 : 0,
                    ]);
                } else {
                    // Add new answer
                    $question->answers()->create([
                        'answer_text' => $answerData['answer_text'],
                        'is_correct' => isset($answerData['is_correct']) ? 1 : 0,
                    ]);
                }
            }
        }
    
        return response()->json(['success' => true, 'message' => 'Quiz updated successfully.']);
    }
    

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }
}
