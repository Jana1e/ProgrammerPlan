@extends('frontend.layouts.app')

@section('content')
    <!-- External Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        /* Your CSS styles here (same as provided earlier, adjusted as needed) */

        /* General Layout */


        .container-xxl {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 15px;
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 34px;
            font-weight: 600;
            color: #003580;
        }

        .page-header p {
            font-size: 16px;
            color: #6c757d;
        }

        /* Modern Timer */
        .modern-timer-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .modern-timer {
            background: linear-gradient(135deg, #007bff, #0056b3);
            padding: 20px 30px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease, background 0.3s ease;
            animation: pulse 1s infinite;
            color: #fff;
        }

        .modern-timer:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #0056b3, #003580);
        }

        .time-value {
            font-size: 36px;
            font-weight: bold;
            animation: fadeIn 0.5s ease-in-out;
        }

        .time-unit {
            font-size: 16px;
            font-weight: 500;
            color: #cce5ff;
        }

        /* Animations */
        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            }

            50% {
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Code Editor Section */
        .code-editor {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        #editor {
            height: 400px;
            border-radius: 15px;
            border: 1px solid #ddd;
            font-size: 16px;
            padding: 15px;
            overflow: auto;

            font-family: 'Courier New', monospace;
        }

        /* Buttons */
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Output Section */
        .output-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
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
            background: #f9f9f9;
            padding: 15px;
            border-radius: 10px;
            overflow-x: auto;
            white-space: pre-wrap;
        }

        /* Challenge Slider */
        .slider-container {
            background: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        .slider-header {
            font-size: 20px;
            font-weight: 700;
            color: #007bff;
            margin-bottom: 15px;
        }

        .slider-content {
            max-height: 300px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .slider-content p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            border-left: 4px solid #007bff;
            padding-left: 15px;
            background: #f9f9f9;
            border-radius: 10px;
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
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .modern-timer {
                flex-direction: column;
                padding: 15px 20px;
            }

            .row {
                flex-direction: column;
            }

            .col-lg-8,
            .col-lg-4 {
                width: 100%;
                margin-bottom: 20px;
            }

            .btn-primary {
                background: var(--main-color);
                border: none;
                border-radius: 5px;
                font-size: 16px;
                padding: 10px 20px;
                transition: background 0.3s;
            }

            .btn-primary:hover,
            .btn-primary:active {
                background: var(--green-color);
            }


        }
    </style>
    <style>
        .game_filter {
            padding: 30px 0;
            width: 100%;
        }

        .card_shadow {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs {
            margin-bottom: 20px;
        }

        .nav-tabs .nav-item .nav-link {
            font-family: "Inter", sans-serif;
            font-weight: 500;
            font-size: 18px;
            line-height: 24px;
            color: #1d2026;
        }

        .nav-tabs .nav-link.active {
            border-bottom: 2px solid var(--blue);
        }

        .cards_game {
            background: #e9efff;
            cursor: pointer;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 30px;
            transition: transform 0.5s, background 0.5s;
            text-align: center;
        }

        .cards_game:hover {
            background: var(--main-color);
            color: var(--white-Color);
            transform: scale(1.05);
        }

        .cards_game img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .game_heading h4 {
            margin: 10px 0;
            font-family: "Inter", sans-serif;
            font-weight: 600;
            font-size: 18px;
            line-height: 22px;
            color: #1d2026;
        }

        .btn-primary {
            background: var(--main-color);
            border: none;
            border-radius: 5px;
            font-size: 16px;
            padding: 10px 20px;
            transition: background 0.3s;
        }

        .btn-primary:hover,
        .btn-primary:active {
            background: var(--green-color);
        }
    </style>

    <!-- CSRF Token for AJAX requests -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <section class="section dashboard" id="home_course">
        <div class="container-xxl">





            <div class="row">
                <!-- Code Editor Section -->
                <div class="col-lg-8">
                    <div class="code-editor">


                        <div id="editor"># Write your solution here</div>

                        <button id="runCode" class="btn btn-primary mt-3" onclick="executeCode()">
                            <i class="fas fa-play"></i> Run Code
                        </button>



                        <div class="output-container mt-4">
                            <div class="output-header">Output:</div>
                            <pre id="outputResult" class="output-content">Your output will appear here...</pre>
                        </div>
                    </div>
                </div>

                <!-- Challenge Information Slider -->
                <div class="col-lg-4">
                    <div class="slider-container">
                        <div class="slider-header">Challenge Information</div>
                        <div class="slider-content" id="challengeContent">
                            <!-- Challenge description will be loaded here -->
                            <p>Click "Generate New Challenge" to get started.</p>
                        </div>
                        <div class="slider-nav">
                            <button id="prevSlide" onclick="previousSlide()" disabled>Previous</button>
                            <button id="nextSlide" onclick="nextSlide()" disabled>Next</button>
                        </div>
                    </div>

                    <div class="output-container mt-4">
                        <div class="output-header">Expected Output:</div>
                        <div class="output-content" id="expectedOutput">
                            <!-- Expected output will be loaded here -->
                        </div>
                    </div>


                    <button onclick="generateChallenge()" class="btn btn-primary mt-3">
                        <i class="fas fa-sync-alt"></i> Generate New Challenge
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="modern-timer-container text-center mb-3">
        <div class="modern-timer">
            <span id="timeLeft" class="time-value">30</span>
            <span class="time-unit">seconds remaining</span>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script>
        const lang = '{{ $lang }}';
        const level = '{{ $level }}';
        // Initialize Ace Editor
        const editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode(`ace/mode/${lang}`);

        // CSRF Token Setup for AJAX
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');








        class ModernTimer {
            constructor(duration, displayElementId, onEndCallback) {
                this.duration = duration;
                this.remainingTime = duration;
                this.displayElement = document.getElementById(displayElementId);
                this.timerInterval = null;
                this.onEndCallback = onEndCallback;
            }

            start() {
                this.stop();
                this.updateDisplay();

                this.timerInterval = setInterval(() => {
                    this.remainingTime--;
                    this.updateDisplay();

                    if (this.remainingTime <= 0) {
                        this.stop();
                        if (this.onEndCallback) this.onEndCallback();
                    }
                }, 1000);
            }

            stop() {
                if (this.timerInterval) {
                    clearInterval(this.timerInterval);
                    this.timerInterval = null;
                }
            }

            reset() {
                this.stop();
                this.remainingTime = this.duration;
                this.updateDisplay();
            }

            updateDisplay() {
                const timeLeft = this.remainingTime;
                const timerContainer = this.displayElement.parentNode;

                // Update time value
                this.displayElement.innerText = timeLeft;

                // Update timer state styles
                if (timeLeft <= 10) {
                    timerContainer.classList.add('critical');
                    timerContainer.classList.remove('warning');
                } else if (timeLeft <= 20) {
                    timerContainer.classList.add('warning');
                    timerContainer.classList.remove('critical');
                } else {
                    timerContainer.classList.remove('critical', 'warning');
                }
            }
        }

      
// Initialize Timer
const modernTimer = new ModernTimer(30, 'timeLeft', () => {
    alert("Time's up! Challenge has ended.");
    editor.setReadOnly(true);
    document.getElementById("runCode").disabled = true;
});

        editor.setReadOnly(true);
        document.getElementById("runCode").disabled = true;



        // Change Editor Mode Based on Selected Language
        function changeLanguage() {
            const language = document.getElementById('languages').value.toLowerCase();
            const modes = {
                'c': 'ace/mode/c_cpp',
                'cpp': 'ace/mode/c_cpp',
                'php': 'ace/mode/php',
                'python': 'ace/mode/python',
                'javascript': 'ace/mode/javascript',
                'node': 'ace/mode/javascript'
            };
            editor.session.setMode(modes[language] || 'ace/mode/python');
        }


        // Generate a New Challenge
        function generateChallenge() {
            // Optional: Show a loading indicator
            document.getElementById("challengeContent").innerHTML = "<p>Loading challenge...</p>";
            document.getElementById("expectedOutput").innerHTML = "";
            document.getElementById("outputResult").innerText = "Your output will appear here...";

            fetch('/challenge/generateChallenge', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({
                        difficulty: level,
                        language: lang
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.challenge) {
                        displayChallenge(data.challenge);
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
        function displayChallenge(challengeText) {
            const challengeDiv = document.getElementById("challengeContent");
            challengeDiv.innerHTML = ""; // Clear previous content

            // Split the challenge into paragraphs
            const paragraphs = challengeText.split('\n\n');
            paragraphs.forEach(paragraph => {
                if (paragraph.startsWith("Input:") || paragraph.startsWith("Output:")) {
                    const p = document.createElement("p");
                    p.innerHTML = paragraph.replace(/Input:/g, "<strong>Input:</strong>").replace(/Output:/g,
                        "<strong>Output:</strong>");
                    challengeDiv.appendChild(p);
                } else {
                    const p = document.createElement("p");
                    p.textContent = paragraph;
                    challengeDiv.appendChild(p);
                }
            });

            // Optionally, extract and display expected output
            extractExpectedOutput(challengeText);

            // Enable slider buttons if multiple slides are present
            enableSliderButtons(challengeText);

            editor.setReadOnly(false);
            document.getElementById("runCode").disabled = false;

            editor.setReadOnly(false);
    document.getElementById("runCode").disabled = false;
    modernTimer.reset();

    setTimeout(() => {
        modernTimer.start(); // Start the timer
    }, 500);




        }

        // Extract Expected Output from the Challenge Text
        function extractExpectedOutput(challengeText) {
            const expectedOutputDiv = document.getElementById("expectedOutput");
            const outputRegex = /Output:\s*(?:<code>)?([^<\n]*)/g;
            const matches = [...challengeText.matchAll(outputRegex)];
            if (matches.length > 0) {
                expectedOutputDiv.innerHTML = "";
                matches.forEach(match => {
                    const output = match[1].trim();
                    const p = document.createElement("p");
                    p.innerHTML = `<code>${output}</code>`;
                    expectedOutputDiv.appendChild(p);
                });
            }
        }

        // Enable or Disable Slider Buttons Based on Challenge Content
        function enableSliderButtons(challengeText) {
            const slides = challengeText.split('\n\n');
            const prevBtn = document.getElementById('prevSlide');
            const nextBtn = document.getElementById('nextSlide');

            if (slides.length > 1) {
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
        
            const challengeText = document.getElementById('challengeContent').innerText;

            if (!challengeText || challengeText === "Loading challenge..." || challengeText ===
                "Click \"Generate New Challenge\" to get started.") {
                alert("Please generate a challenge first.");
                return;
            }

            document.getElementById("outputResult").innerText = "Running...";

            fetch('/challenge/executeCode', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({
                        code,
                        lang,
                        challenge: challengeText
                    }),
                })
                .then(response => response.json())
                .then(data => {


                    if (data.output) {
                        document.getElementById("outputResult").innerText = data.output;
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
