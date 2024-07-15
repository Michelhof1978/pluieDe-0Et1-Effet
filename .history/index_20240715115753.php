<!DOCTYPE html>
<html>
<head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: monospace;
            background-color: black;
            color: lime;
            position: relative;
        }
        .star-line {
            position: absolute;
            white-space: nowrap;
            animation: move 5s linear infinite;
            width: 100%;
        }
        .star {
            display: inline-block;
            font-size: 20px;
            animation: blink 1s linear infinite;
        }
        @keyframes blink {
            50% { opacity: 0; }
        }
        @keyframes move {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }
    </style>
</head>
<body>
    <script>
        const chars = '01';
        function createStarLines() {
            const lineCount = 30;
            const charsPerLine = 110;
            const starContainer = document.body;
            for (let i = 0; i < lineCount; i++) {
                const line = document.createElement('div');
                line.className = 'star-line';
                line.style.top = `${(100 / lineCount) * i}%`;
                for (let j = 0; j < charsPerLine; j++) {
                    const char = chars.charAt(Math.floor(Math.random() * chars.length));
                    const span = document.createElement('span');
                    span.textContent = char;
                    span.className = 'star';
                    span.style.animationDelay = `${Math.random() * 1550}s`;
                    line.appendChild(span);
                }
                starContainer.appendChild(line);
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            createStarLines();
        });
    </script>
</body>
</html>
