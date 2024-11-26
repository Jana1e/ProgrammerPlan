@extends('frontend.layouts.app')

@section('content')

<!-- External Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    /* General Layout */
    body {
        background-color: #f4f7fc;
        font-family: 'Poppins', sans-serif;
    }

    .container-xxl {
        margin: 50px auto;
        max-width: 1200px;
    }

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .page-header h1 {
        font-size: 36px;
        font-weight: 700;
        color: #007bff;
        margin-bottom: 10px;
    }

    .page-header p {
        font-size: 18px;
        color: #6c757d;
    }

    /* Control Panel */
    .control-panel {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        background: #ffffff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .control-panel label {
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }

    .control-panel select {
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        background: #f9f9f9;
        transition: border-color 0.3s ease;
    }

    .control-panel select:hover {
        border-color: #007bff;
    }

    /* Timer Section */
    .timer-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
    }

    .circular-timer {
        position: relative;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: conic-gradient(#007bff var(--progress), #e0e0e0 var(--progress));
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        transition: background 0.5s ease;
    }

    .circular-timer .inner-content {
        position: absolute;
        text-align: center;
    }

    .circular-timer .inner-content .time-value {
        font-size: 32px;
        font-weight: bold;
        color: #333;
    }

    .circular-timer .inner-content .time-unit {
        font-size: 14px;
        color: #6c757d;
    }

    /* Timer States */
    .circular-timer.warning {
        background: conic-gradient(#ffc107 var(--progress), #e0e0e0 var(--progress));
    }

    .circular-timer.critical {
        background: conic-gradient(#dc3545 var(--progress), #e0e0e0 var(--progress));
    }

    /* Main Content Layout */
    .main-content {
        display: flex;
        gap: 20px;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    /* Code Editor Section */
    .code-editor-container {
        flex: 2;
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        padding: 20px;
        min-width: 350px;
    }

    .code-editor-container h2 {
        font-size: 24px;
        font-weight: 700;
        color: #007bff;
        margin-bottom: 15px;
    }

    #editor {
        height: 300px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    /* Buttons */
    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 12px 30px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 10px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-3px);
    }

    .btn-primary:disabled {
        background-color: #a0a0a0;
        cursor: not-allowed;
        transform: none;
    }

    /* Output Section */
    .output-container {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 10px;
        box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.05);
        overflow-x: auto;
    }

    .output-header {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .output-content {
        font-size: 16px;
        color: #555;
    }

    /* Challenge Information Slider */
    .slider-container {
        flex: 1;
        background: #ffffff;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        min-width: 300px;
    }

    .slider-header {
        font-size: 20px;
        font-weight: 700;
        color: #007bff;
        margin-bottom: 15px;
        text-align: center;
    }

    .slider-content {
        max-height: 300px;
        overflow-y: auto;
    }

    .slider-content p {
        font-size: 16px;
        color: #555;
        line-height: 1.8;
        border-left: 4px solid #007bff;
        padding-left: 15px;
        background: #f9f9f9;
        border-radius: 10px;
        margin-bottom: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .slider-nav {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        margin-top: 15px;
    }

    .slider-nav button {
        flex: 1;
        padding: 12px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .slider-nav button:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .slider-nav button:disabled {
        background-color: #ddd;
        cursor: not-allowed;
        transform: none;
    }
</style>

<!-- CSRF Token for AJAX requests -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<section class="section dashboard" id="home_course">
    <div class="container-xxl">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Coding Challenge</h1>
            <p>Test your programming skills with interactive challenges!</p>
        </div>

        <!-- Control Panel -->
        <div class="control-panel">
            <div>
                <label for="challengeType">Challenge Type:</label>
                <select id="challengeType" onchange="generateChallenge()">
                    <option value="standard">Standard</option>
                    <option value="bug_hunter">Bug Hunter</option>
                </select>
            </div>
            <div>
                <label for="difficulty">Difficulty:</label>
                <select id="difficulty" onchange="generateChallenge()">
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                </select>
            </div>
            <div>
                <label for="languages">Language:</label>
                <select id="languages" onchange="changeLanguage()">
                    <option value="javascript">JavaScript</option>
                    <option value="python">Python</option>
                    <option value="php">PHP</option>
                    <option value="c">C</option>
                    <option value="cpp">C++</option>
                    <option value="node">Node JS</option>
                </select>
            </div>
        </div>

       

        <!-- Main Content -->
        <div class="main-content">
            <!-- Code Editor Section -->
            <div class="code-editor-container">
                <h2>Code Editor</h2>
                <div id="editor"># Write your solution here...</div>
                <button id="runCode" class="btn-primary" onclick="executeCode()">Run Code</button>

                <!-- Output Section -->
                <div class="output-container mt-4">
                    <div class="output-header">Output:</div>
                    <div id="outputResult" class="output-content">Your output will appear here...</div>
                </div>
            </div>

            <!-- Challenge Information Slider -->
            <div class="slider-container">
                <div class="slider-header">Challenge Information</div>
                <div class="slider-content" id="challengeContent">
                    <!-- Challenge description will be loaded here -->
                    <p>Click "Generate Challenge" to get started.</p>
                </div>
                <div class="slider-nav">
                    <button id="prevSlide" onclick="previousSlide()" disabled>Previous</button>
                    <button id="nextSlide" onclick="nextSlide()" disabled>Next</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/prettier@2.8.3/standalone.js"></script>
<script src="https://unpkg.com/prettier@2.8.3/parser-babel.js"></script>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
<script>
    // Initialize Ace Editor
    const editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/javascript"); // Default language

// Raw JavaScript code (unformatted)
const rawCode = "function getAverage(arr){var total=0;for(var i=0;i<arr.length;i++){total+=arr[i];}var average=total/arr.length;return average.toFixed(1);}";



function formatCodeInEditor() {
    const rawCode = editor.getValue();
    const selectedLanguage = document.getElementById("languages").value;
    const parser = languageToParser[selectedLanguage];

    if (!parser) {
        alert("This language is not supported for formatting.");
        return;
    }

    try {
        const formattedCode = prettier.format(rawCode, {
            parser: parser,
            plugins: prettierPlugins,
            tabWidth: 4,
            semi: true,
            singleQuote: true,
        });

        editor.setValue(formattedCode, -1); // -1 to maintain cursor position
    } catch (error) {
        console.error("Error formatting code:", error);
        alert("An error occurred while formatting the code.");
    }
}

function changeLanguage() {
    const selectedLanguage = document.getElementById("languages").value;
    const aceMode = languageToAceMode[selectedLanguage] || "ace/mode/javascript"; // Default to JS
    editor.session.setMode(aceMode);
    formatCodeInEditor();

}



// Add formatted code to the Ace Editor
editor.session.setMode("ace/mode/javascript"); // Set the language mode
editor.setValue(rawCode); // Set the formatted code



const languageToAceMode = {
    javascript: "ace/mode/javascript",
    python: "ace/mode/python",
    php: "ace/mode/php",
    c: "ace/mode/c_cpp",
    cpp: "ace/mode/c_cpp",
    node: "ace/mode/javascript",
};

const languageToParser = {
    javascript: "babel",
    python: "python",
    php: "php",
    c: "babel", // Limited support for C
    cpp: "babel", // Limited support for C++
    node: "babel",
};






    // CSRF Token Setup for AJAX
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

 


    // Start Timer on Challenge Generation
    function generateChallenge() {
        // Get selected options
        const type = document.getElementById('challengeType').value;
        const difficulty = document.getElementById('difficulty').value;
        const language = document.getElementById('languages').value;

        // Show loading indicator
        document.getElementById("challengeContent").innerHTML = "<p>Loading challenge...</p>";
        document.getElementById("outputResult").innerText = "Your output will appear here...";
        editor.setValue('# Write your solution here...');
        editor.setReadOnly(true);
        document.getElementById("runCode").disabled = true;

   

        fetch('/challenge/generate_bug_hunter_challenge', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({difficulty, language }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.challenge) {
                    displayChallenge(data.challenge, type);
                } else {
                    document.getElementById("challengeContent").innerHTML = "<p>Error generating challenge.</p>";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById("challengeContent").innerHTML = "<p>Error generating challenge.</p>";
            });
    }

   // Display the Challenge in the Slider
function displayChallenge(challengeText, type) {
    const challengeDiv = document.getElementById("challengeContent");
    challengeDiv.innerHTML = ""; // Clear previous content

    if (type === 'bug_hunter') {
        // Parse the challenge content using regex
        const problemRegex = /1\.\s\*\*Problem Description\*\*:\s*(.*?)\s*2\.\s\*\*Buggy Code Snippet\*\*:\s*```(.*?)```/s;
        const problemMatch = challengeText.match(problemRegex);

        if (problemMatch) {
            const description = problemMatch[1].trim(); // Extract problem description
            const buggyCode = problemMatch[2].trim();  // Extract buggy code snippet

            // Enable the editor for the challenge
            editor.setReadOnly(false);
            document.getElementById("runCode").disabled = false;

            // Set the buggy code in the Ace editor
            editor.setValue(buggyCode);

            // Create and append the problem description to the challenge content
            const descP = document.createElement("p");
            descP.textContent = description;
            challengeDiv.appendChild(descP);

            // Add a header for the buggy code section
            const codeHeader = document.createElement("p");
            codeHeader.innerHTML = "<strong>Buggy Code Snippet:</strong>";
            challengeDiv.appendChild(codeHeader);

            // Create and append a preformatted block for the buggy code
            const codePre = document.createElement("pre");
            codePre.textContent = buggyCode;
            codePre.style.background = "#f0f0f0";
            codePre.style.padding = "10px";
            codePre.style.borderRadius = "8px";
            codePre.style.overflowX = "auto";
            challengeDiv.appendChild(codePre);
        } else {
            // Handle invalid format
           challengeDiv.innerHTML = "<p>Invalid Bug Hunter challenge format.</p>";
        }
    }

    // Enable slider buttons if multiple slides are present
    enableSliderButtons(challengeText, type);

    // Optionally format code in the editor
   // formatCodeInEditor();
}



    // Enable or Disable Slider Buttons Based on Challenge Content
    function enableSliderButtons(challengeText, type) {
        let slides;
     
            slides = 3; // Description, Buggy Code, Examples
       

        const prevBtn = document.getElementById('prevSlide');
        const nextBtn = document.getElementById('nextSlide');

        if (slides > 1) {
            prevBtn.disabled = true;
            nextBtn.disabled = false;
        } else {
            prevBtn.disabled = true;
            nextBtn.disabled = true;
        }
    }

    // Execute User Code
    function executeCode() {

        const code = editor.getValue();
        const language = document.getElementById('languages').value;
        const challengeText = document.getElementById('challengeContent').innerText;

        if (!challengeText || challengeText.includes("Loading challenge") || challengeText.includes("Click")) {
            alert("Please generate a challenge first.");
            return;
        }

        document.getElementById("outputResult").innerText = "Running...";

        fetch('/challenge/executeCode_bug_hunter', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({ code, language, challenge: challengeText }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.output) {
                    let outputText = data.output;
                    if (data.feedback) {
                        outputText += `\n\nFeedback: ${data.feedback}`;
                    }
                    document.getElementById("outputResult").innerText = outputText;
                } else if (data.error) {
                    document.getElementById("outputResult").innerText = `Error: ${data.error}`;
                } else {
                    document.getElementById("outputResult").innerText = "Unknown error occurred.";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById("outputResult").innerText = "Error executing code.";
            });
    }

    // Slider Navigation
    let currentSlide = 0;

    function updateSlideButtons() {
        const prevBtn = document.getElementById('prevSlide');
        const nextBtn = document.getElementById('nextSlide');
        const slides = document.querySelectorAll('.slider-content p');

        prevBtn.disabled = currentSlide === 0;
        nextBtn.disabled = currentSlide === slides.length - 1;
    }

    function nextSlide() {
        const slides = document.querySelectorAll('.slider-content p');
        if (currentSlide < slides.length - 1) {
            slides[currentSlide].style.display = 'none';
            currentSlide++;
            slides[currentSlide].style.display = 'block';
            updateSlideButtons();
        }
    }

    function previousSlide() {
        const slides = document.querySelectorAll('.slider-content p');
        if (currentSlide > 0) {
            slides[currentSlide].style.display = 'none';
            currentSlide--;
            slides[currentSlide].style.display = 'block';
            updateSlideButtons();
        }
    }

    // Initialize Slider Buttons
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slider-content p');
        slides.forEach((slide, index) => {
            slide.style.display = index === 0 ? 'block' : 'none';
        });
        updateSlideButtons();
    });
</script>

@endsection
