<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Challenge</title>
    <!-- Add CSRF Token Meta -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Programming Challenge</h1>
    <div id="challenge">
        <p>Loading challenge...</p>
    </div>

    <form id="submit-code-form">
        <textarea id="code" rows="10" cols="50" placeholder="Write your code here"></textarea>
        <button type="submit">Submit</button>
    </form>

    <div id="result"></div>

    <script>
        // Set up CSRF token for all AJAX requests
        document.addEventListener('DOMContentLoaded', function () {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            // Configure fetch to include the CSRF token in the headers
            window.fetch = (originalFetch => {
                return function (...args) {
                    if (args.length > 1 && args[1].method && args[1].method.toUpperCase() === 'POST') {
                        args[1].headers = {
                            ...args[1].headers,
                            'X-CSRF-TOKEN': csrfToken,
                        };
                    }
                    return originalFetch.apply(this, args);
                };
            })(window.fetch);
        });

        async function fetchChallenge() {
            const response = await fetch('/challenge');
            const data = await response.json();
            document.getElementById('challenge').innerHTML = `<p>${data.challenge}</p>`;
            localStorage.setItem('currentChallenge', data.challenge);
        }

        document.getElementById('submit-code-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const code = document.getElementById('code').value;
            const challenge = localStorage.getItem('currentChallenge');

            const response = await fetch('/challenge/submit', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ code, challenge }),
            });

            const result = await response.json();
            document.getElementById('result').innerText = result.result;
        });

        fetchChallenge();
    </script>
</body>
</html>
