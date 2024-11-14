<?php include 'header.php'; ?>

<<div class="game-container">
    <!-- Displaying the code snippet based on language and level -->
    <div class="code-card">
      <pre id="codeDisplay">/* Code snippet will appear here based on user's choice */</pre>
    </div>

    <!-- Input field for user to write the error -->
    <div class="input-section">
      <input type="text" id="errorInput" placeholder="Type the error here">
      <button onclick="checkAnswer()">Check Answer</button>
    </div>

    <!-- Feedback area -->
    <div id="feedback" class="feedback"></div>

    <!-- Next question button (hidden by default) -->
    <button id="nextQuestion" onclick="loadNextQuestion()" style="display: none;">Next Question</button>
  </div>
</div>
<script>
// Sample code questions (for demo purposes)
const questions = {
  JavaScript: {
    Beginner: [
      { code: "const a = 10; a = 5;", error: "Assignment to constant variable" },
      { code: "console.log('Hello World)", error: "Syntax error: missing closing quote" }
    ]
  },
  Python: {
    Beginner: [
      { code: "print 'Hello World'", error: "Syntax error: missing parentheses" }
    ]
  }
};

// Initialize current question
let currentQuestionIndex = 0;
let selectedLanguage = "JavaScript";  // Example selected language
let selectedLevel = "Beginner";       // Example selected level

// Function to load the question based on user choice
function loadQuestion() {
  const question = questions[selectedLanguage][selectedLevel][currentQuestionIndex];
  document.getElementById('codeDisplay').innerText = question.code;
  document.getElementById('feedback').innerText = '';
  document.getElementById('errorInput').value = '';
  document.getElementById('nextQuestion').style.display = 'none';
}

// Function to check user's answer
function checkAnswer() {
  const userAnswer = document.getElementById('errorInput').value.trim();
  const question = questions[selectedLanguage][selectedLevel][currentQuestionIndex];

  if (userAnswer.toLowerCase() === question.error.toLowerCase()) {
    document.getElementById('feedback').innerText = 'Correct! Well done.';
    document.getElementById('nextQuestion').style.display = 'inline';
  } else {
    document.getElementById('feedback').innerText = 'Incorrect. Try again.';
  }
}

// Function to load the next question
function loadNextQuestion() {
  currentQuestionIndex++;
  if (currentQuestionIndex < questions[selectedLanguage][selectedLevel].length) {
    loadQuestion();
  } else {
    document.getElementById('feedback').innerText = 'Congratulations! You completed all questions.';
    document.getElementById('nextQuestion').style.display = 'none';
  }
}

// Load the initial question
loadQuestion();
</script>

<?php include 'footer.php'; ?>
