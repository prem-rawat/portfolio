<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading... | Prem Rawat Portfolio</title>
    
    <!-- Using the same Poppins font for consistency -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* CSS Variables for easy color management */
        :root {
            --background-color: #1a253c; /* Matches your portfolio's header/footer */
            --primary-color: #007bff;
            --accent-color: #00d4ff;
            --text-light: #f5f5f5;
            --text-muted: #aaaaaa;
        }

        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-light);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            text-align: center;
        }

        .loader-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* === NEW LOGO CONTAINER WITH SONAR EFFECT === */
        .logo-wrapper {
            width: 120px;
            height: 120px;
            position: relative;
            margin-bottom: 2.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* The expanding sonar rings */
        .logo-wrapper::before,
        .logo-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid var(--primary-color);
            animation: sonar-effect 2s infinite linear;
        }

        /* The second ring has a delay to create the continuous effect */
        .logo-wrapper::after {
            animation-delay: -1s;
        }

        /* The actual logo image, styled to be circular */
        .logo-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover; /* Ensures the image covers the circle area */
            border: 3px solid var(--accent-color);
            box-shadow: 0 0 15px rgba(0, 212, 255, 0.5);
        }

        /* === IMPROVED TEXT ANIMATION === */
        h1 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-light);
            opacity: 0;
            animation: slideUpFadeIn 1s 0.5s forwards;
        }

        .subtitle {
            font-size: 1.1rem;
            font-weight: 400;
            letter-spacing: 2px;
            color: var(--text-muted);
            margin-top: 8px;
            opacity: 0;
            animation: slideUpFadeIn 1s 0.8s forwards;
        }
        
        /* === DYNAMIC LOADING TEXT WITH TYPING DOTS === */
        .progress-text {
            margin-top: 3rem;
            color: var(--text-muted);
            font-size: 0.9rem;
            opacity: 0;
            animation: slideUpFadeIn 1s 1.1s forwards;
        }
        
        .progress-text::after {
            content: '...';
            display: inline-block;
            animation: typing-dots 1.5s infinite;
        }

        /* ====================
           ANIMATION KEYFRAMES
           ==================== */

        /* Sonar effect for the logo rings */
        @keyframes sonar-effect {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(1.7);
                opacity: 0;
            }
        }
        
        /* Slide up and fade in effect for text */
        @keyframes slideUpFadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
            from {
                opacity: 0;
                transform: translateY(20px);
            }
        }
        
        /* Typing dots animation */
        @keyframes typing-dots {
            0% { content: '.'; }
            33% { content: '..'; }
            66% { content: '...'; }
            100% { content: '.'; }
        }
    </style>
</head>
<body>

    <div class="loader-container">
        <div class="logo-wrapper">
            <img src="images/5555.png" alt="Prem Rawat Logo" class="logo-image">
        </div>
        <h1>Prem Rawat</h1>
        <p class="subtitle">Web & Backend Developer</p>
        <p class="progress-text">Initializing Portfolio</p>
    </div>

    <script>
        // Redirect after a set time. 3.5 seconds is a good duration.
        window.setTimeout(function() {
            // Redirect to your main portfolio page
            window.location.href = 'introduction.php'; // Change this to your main page
        }, 5000); // 5000 ms = 5 seconds
    </script>

</body>
</html>