<?php include 'header.php'; ?>


<div class="card_shadow shadow_sec_padd">
  <!-- This container will show only the title, description, and start button at the beginning -->
  <div class="row align-items-center" id="startSection">
  <div class="col-md-6">
      <img src="https://i.pinimg.com/564x/7e/0b/a6/7e0ba6e3703ffafc9f34d1efc8af2a95.jpg" alt="Game Image" class="img-fluid w-90 mb-2">
    </div>
    <div class="col-md-6 text-center text-md-start">
      <h2>Bug Hunter</h2>
      <p>Welcome to Bug Hunter! In this game, you’ll be presented with code snippets that contain bugs or errors. Your task is to identify what’s 
        wrong with the code and describe the error in the input box. Each time you correctly identify an issue, you’ll move on to the next challenge.</p>
      <button class="btn btn-primary" onclick="startGame()">Start Game</button>
    </div>
  </div>
  <!-- This container will show the game content after the user clicks 'Start Game' -->
  <div class="col-md-8 col-lg-12 text-center  " id="gameSection" style="display: none;">
    <div class="game-container">
      <!-- Displaying the code snippet based on language and level -->
      <div class="code-card mb-3">
        <pre id="codeDisplay" class="bg-light p-3 border rounded">/* Code snippet will appear here based on user's choice */</pre>
      </div>

      <!-- Input field for user to write the error -->
      <div class="input-section mb-3">
        <input type="text" id="errorInput" class="form-control mb-2" placeholder="Type the error here">
        <button class="btn btn-primary" onclick="checkAnswer()">Check Answer</button>
      </div>

      <!-- Feedback area -->
      <div id="feedback" class="feedback mt-3"></div>

      <!-- Next question button (hidden by default) -->
      <button id="nextQuestion" class="btn btn-secondary mt-3" onclick="loadNextQuestion()" style="display: none;">Next Question</button>
    </div>

    <!-- Final Score (hidden by default) -->
    <div id="finalScore" class="final-score mt-4" style="display: none;"></div>
  </div>
</div>

<!-- Modal for showing the result of Check Answer -->
<div class="modal fade" id="gameModal" tabindex="-1" aria-labelledby="gameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="gameModalLabel">Answer Feedback</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="modalFeedback"></p>
      </div>
    </div>
  </div>
</div>

<script>
// Questions 
const questions = {
  JavaScript: {
    Beginner: [
      { code: "const a = 10; a = 5;", error: "Assignment to constant variable" },
      { code: "console.log('Hello World)", error: "Syntax error: missing closing quote" },
      { code: "let b = 20; b = 'test';", error: "Cannot assign a string to a number" },
      { code: "var x = 5; if (x = 10) { console.log('Correct'); }", error: "Assignment instead of comparison (use '==' instead of '=')" },
      { code: "let a = [1, 2, 3]; console.log(a[5]);", error: "Index out of bounds (undefined value)" },
      { code: "let name = 'John; console.log(name);", error: "Syntax error: missing closing quote" },
      { code: "function test() { return 5; } let result = test;", error: "Function not invoked (missing parentheses)" },
      { code: "const obj = { key: 'value' }; console.log(obj['key']);", error: "Correct syntax, no error" }, // Intentional correct code to test
      { code: "for (let i = 0; i < 5; i++) { console.log(i);", error: "Missing closing brace for loop" },
      { code: "const obj = {}; obj.key = 'value'; console.log(obj.key);", error: "Correct syntax, no error" } // Intentional correct code to test
    ],
    Intermediate: [
      { code: "function myFunc() { let x = 10; if (x > 5) console.log('X is greater than 5'); }", error: "Missing 'else' statement" },
      { code: "let nums = [1, 2, 3, 4]; nums.push(5, 6)", error: "Missing semicolon" },
      { code: "let str = 'hello'; if (str === 'hello') { console.log('Correct'); } else { console.log('Incorrect') }", error: "Missing closing parenthesis in else block" },
      { code: "let arr = [1, 2, 3]; arr.forEach(i => { console.log(i);", error: "Missing closing parenthesis for forEach method" },
      { code: "const a = 10; const b = 20; let sum = a + b console.log(sum);", error: "Missing semicolon at the end of statement" },
      { code: "let a = 5; let b = 10; let result = a + b console.log(result);", error: "Missing semicolon" },
      { code: "function test() { return 5; } const testFunc = test();", error: "Function not invoked correctly" },
      { code: "let arr = [1, 2, 3]; arr.pop(); console.log(arr);", error: "Correct code, no error" }, //  correct code
      { code: "let arr = [1, 2, 3]; arr.shift() console.log(arr);", error: "Missing semicolon" },
      { code: "let obj = {name: 'John', age: 30}; obj.name = 'Mike'; console.log(obj.name);", error: "Correct code, no error" } //  correct code
    ],
    Advanced: [
      { code: "const asyncFunc = async () => { return 5 }", error: "Missing 'await' keyword" },
      { code: "const x = [1, 2, 3]; x.map((i) => console.log(i) return x);", error: "Missing closing parenthesis for map function" },
      { code: "let func = (a, b) => { return a + b }", error: "Correct syntax, no error" }, // correct code to test
      { code: "function test() { return 5 } const testFunc = test;", error: "Function not invoked correctly" },
      { code: "let arr = [1, 2, 3]; arr.find(i => i === 2;)", error: "Missing closing parenthesis in find method" },
      { code: "const a = 10; if (a = 5) { console.log('Correct'); }", error: "Incorrect assignment operator, use '==' for comparison" },
      { code: "let nums = [1, 2, 3]; nums.forEach(num => console.log(num));", error: "Correct code, no error" },
      { code: "let obj = {key: 'value'}; let clone = Object.assign({}, obj); console.log(clone.key);", error: "Correct code, no error" },
      { code: "let arr = [1, 2, 3]; arr.unshift(0);", error: "Correct code, no error" },
      { code: "function test() { let x = 5; return x; }", error: "Correct code, no error" }
    ]
  },

  Java: {
    Beginner: [
      { code: "int x = 5; x = 'Hello';", error: "Incompatible data types (int and String)" },
      { code: "public static void main(String[] args) { System.out.println('Hello World); }", error: "Syntax error: missing closing quote" },
      { code: "String str = 'Hello'; System.out.println(str);", error: "Correct syntax, no error" },
      { code: "int x = 5; if (x = 10) { System.out.println('Correct'); }", error: "Assignment instead of comparison (use '==' instead of '=')" },
      { code: "for (int i = 0; i < 10; i++) { System.out.println(i);", error: "Missing closing brace for loop" },
      { code: "int[] arr = new int[5]; System.out.println(arr[6]);", error: "ArrayIndexOutOfBoundsException" },
      { code: "int[] arr = new int[5]; arr[5] = 10;", error: "ArrayIndexOutOfBoundsException" },
      { code: "String str = 'Hello World'; str.length();", error: "Method call missing parentheses" },
      { code: "if (x = 5) { System.out.println('Correct'); }", error: "Use '==' for comparison" },
      { code: "int[] arr = new int[] {1, 2, 3}; arr[0] = 10;", error: "Correct syntax, no error" } 
    ],
    Intermediate: [
      { code: "int x = 10; if (x > 5) System.out.println('Greater than 5'); else System.out.println('Less than 5');", error: "Correct syntax, no error" },
      { code: "int[] arr = new int[] {1, 2, 3}; arr.length();", error: "Method call missing parentheses" },
      { code: "int x = 5; if (x == 5) { System.out.println('Correct'); } else { System.out.println('Incorrect');", error: "Missing closing brace" },
      { code: "String str = 'Hello'; if (str == 'Hello') { System.out.println('Correct');", error: "Missing closing parenthesis" },
      { code: "public static void main(String[] args) { System.out.println('Hello World');", error: "Missing closing parenthesis" },
      { code: "for (int i = 0; i < 10; i++) System.out.println(i);", error: "Correct syntax, no error" },
      { code: "int x = 5; while(x > 0) { System.out.println(x); x--; }", error: "Correct syntax, no error" },
      { code: "String str = 'Hello'; str = 'Goodbye'; System.out.println(str);", error: "Correct code, no error" },
      { code: "int x = 5; x++; System.out.println(x);", error: "Correct code, no error" },
      { code: "int[] arr = {1, 2, 3}; System.out.println(arr[2]);", error: "Correct code, no error" }
    ],
    Advanced: [
      { code: "public static void main(String[] args) { String str = null; System.out.println(str.length()); }", error: "NullPointerException" },
      { code: "public static void main(String[] args) { String str = 'Java'; str.length", error: "Missing parentheses for method call" },
      { code: "public static void main(String[] args) { List<String> list = new ArrayList(); list.add('Java'); System.out.println(list.get(1)); }", error: "IndexOutOfBoundsException" },
      { code: "String str = 'Hello'; str = str.toUppercase();", error: "Method 'toUppercase' doesn't exist, use 'toUpperCase'" },
      { code: "int x = 5; while(x >= 0) { System.out.println(x); x--; }", error: "Correct syntax, no error" },
      { code: "try { int x = 10 / 0; } catch (Exception e) { System.out.println('Error occurred'); }", error: "Correct code, no error" },
      { code: "String[] arr = new String[2]; arr[1] = 'Java'; arr[2] = 'Programming';", error: "ArrayIndexOutOfBoundsException" },
      { code: "String str = 'hello'; if (str.equals('hello')) { System.out.println('Correct'); } else { System.out.println('Incorrect'); }", error: "Correct code, no error" },
      { code: "int x = Integer.parseInt('123'); System.out.println(x);", error: "Correct code, no error" },
      { code: "System.out.println(5 / 0);", error: "ArithmeticException: Division by zero" }
    ]
  },

  Python: {
    Beginner: [
      { code: "x = 5; x = 'Hello';", error: "Cannot assign string to integer variable" },
      { code: "print('Hello World)", error: "Syntax error: missing closing quote" },
      { code: "x = 5; print(x)", error: "Correct syntax, no error" },
      { code: "if x = 10: print('Correct')", error: "Assignment instead of comparison, use '==' for comparison" },
      { code: "my_list = [1, 2, 3]; print(my_list[5])", error: "Index out of range" },
      { code: "x = 'Hello'; print(x[5])", error: "Index out of range" },
      { code: "def test(): return 5; test", error: "Missing parentheses to call function" },
      { code: "for i in range(10): print(i)", error: "Correct code, no error" },
      { code: "x = 5; if x = 10: print('Correct')", error: "Comparison operator should be '=='" },
      { code: "print('Hello, World!';", error: "Syntax error: missing closing parenthesis" }
    ],
    Intermediate: [
      { code: "my_dict = {'key': 'value'}; print(my_dict['key'])", error: "Correct syntax, no error" },
      { code: "x = [1, 2, 3]; x.append(4); print(x)", error: "Correct syntax, no error" },
      { code: "if x = 5: print('Correct')", error: "Assignment instead of comparison" },
      { code: "x = [1, 2, 3]; print(x[3])", error: "Index out of range" },
      { code: "y = 'Python'; if y = 'Python': print('Correct')", error: "Assignment instead of comparison, use '=='" },
      { code: "for i in range(10); print(i)", error: "Syntax error: incorrect loop syntax" },
      { code: "x = 5; y = 10; z = x + y print(z)", error: "Missing semicolon" },
      { code: "def add(a, b): return a + b", error: "Correct code, no error" },
      { code: "x = 'Hello'; x[0] = 'h'; print(x)", error: "Strings are immutable, cannot change individual characters" },
      { code: "my_list = [1, 2, 3]; my_list[0] = 10; print(my_list)", error: "Correct code, no error" }
    ],
    Advanced: [
      { code: "try: x = 10 / 0; except ZeroDivisionError: print('Error!')", error: "Correct code, no error" },
      { code: "def my_func(): return 'hello'; my_func() = 'hi';", error: "Cannot assign to function call" },
      { code: "x = [1, 2, 3]; y = x[3];", error: "Index out of range" },
      { code: "my_list = [1, 2, 3]; my_list.append('test';", error: "Syntax error: missing closing parenthesis" },
      { code: "x = '5'; print(x + 5);", error: "Cannot add string and integer" },
      { code: "x = 10; y = 20; print(f'The sum is {x + y})", error: "Syntax error in f-string" },
      { code: "def test(a, b): return a * b; result = test(2);", error: "Function missing argument" },
      { code: "class MyClass: pass; obj = MyClass(); obj.value = 10;", error: "AttributeError, class has no attribute 'value'" },
      { code: "x = {1, 2, 3}; x[0] = 10;", error: "Sets are immutable, cannot assign to individual elements" },
      { code: "import os; os.remove('file.txt')", error: "FileNotFoundError, file does not exist" }
    ]
  }
};

let currentQuestionIndex = 0;
let score = 0;
let selectedLanguage = "JavaScript";  
let selectedLevel = "Beginner";       

// Function to start the game
function startGame() {
  // Hide the start section
  document.getElementById("startSection").style.display = "none";
  
  // Show the game section
  document.getElementById("gameSection").style.display = "block";

  // Load the first question
  loadQuestion();
}

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

  // Show modal with feedback
  const modalFeedback = document.getElementById('modalFeedback');
  if (userAnswer.toLowerCase() === question.error.toLowerCase()) {
    modalFeedback.innerText = 'Correct! Well done.';
    score++;  // Increment score for correct answer
  } else {
    modalFeedback.innerText = 'Incorrect. Try again.';
  }

  const gameModal = new bootstrap.Modal(document.getElementById('gameModal'));
  gameModal.show();

  // Close modal after 3 seconds and move to the next question
  setTimeout(() => {
    gameModal.hide();
    loadNextQuestion();
  }, 1000);
}

// Function to load the next question or display final score
function loadNextQuestion() {
  currentQuestionIndex++;
  if (currentQuestionIndex < questions[selectedLanguage][selectedLevel].length) {
    loadQuestion();
  } else {
    // Hide game content
    document.querySelector('.game-container').style.display = 'none';

    // Show final score
    const finalScoreElement = document.getElementById('finalScore');
    finalScoreElement.style.display = 'block';

    // Set message based on score
    let message = '';
    let scoreColor = '';
    if (score === questions[selectedLanguage][selectedLevel].length) {
      message = 'Excellent job! You got all answers correct!';
      scoreColor = 'green'; // Change to a success color
    } else if (score >= questions[selectedLanguage][selectedLevel].length / 2) {
      message = 'Good job! You did well.';
      scoreColor = 'orange'; // Change to a moderate success color
    } else {
      message = 'Better luck next time!';
      scoreColor = 'red'; // Change to an error or low score color
    }

    // Update HTML with h2, p, and styled score
    finalScoreElement.innerHTML = `
      <h2>Game Over!</h2>
      <p>Your final score is:</p>
      <h1 style="color: ${scoreColor}; font-weight: bold;">
        ${score} / ${questions[selectedLanguage][selectedLevel].length}
      </h1>
      <p>${message}</p>
    `;
  }
}


// Load the initial question (hidden until 'Start Game' is clicked)
loadQuestion();
</script>

<?php include 'footer.php'; ?>
