<x-navbar></x-navbar>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to Meditation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4 py-3">
            <h1 class="font-bold text-lg text-purple-600">Lumin</h1>
            <nav class="space-x-4">
                <a href="#" class="text-gray-600">Home</a>
                <a href="#" class="text-gray-600">History Emotions</a>
                <a href="#" class="text-gray-600">Artikel</a>
                <a href="#" class="text-purple-600 font-semibold">Meditation</a>
                <a href="#" class="text-gray-600">Konseling</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-lg rounded-lg p-8 text-center">
            <!-- Close Button -->
            <button class="absolute top-4 left-4 text-gray-500 hover:text-gray-700">
                ✕
            </button>
            <!-- Title -->
            <h2 class="text-2xl font-bold mb-4">Intro to Meditation</h2>

            <!-- Timer Display -->
            <div class="flex justify-center items-center mb-4">
                <div class="w-40 h-40 bg-white border-2 border-gray-300 rounded-full flex items-center justify-center">
                    <p id="timer" class="text-4xl font-bold">08:30</p>
                </div>
            </div>

            <!-- Audio Control -->
            <div class="flex justify-center space-x-4 mt-4">
                <button id="play-pause-btn" class="bg-purple-600 text-white p-3 rounded-full shadow-md hover:bg-purple-700">
                    ⏸️
                </button>
                <button id="music-btn" class="bg-purple-600 text-white p-3 rounded-full shadow-md hover:bg-purple-700">
                    🎵
                </button>
            </div>

            <!-- Progress Bar -->
            <div class="mt-8">
                <div class="relative w-full h-2 bg-gray-300 rounded-full">
                    <div id="progress-bar" class="absolute h-2 bg-purple-600 rounded-full" style="width: 50%;"></div>
                </div>
                <div class="flex justify-between mt-2 text-gray-600 text-sm">
                    <span id="current-time">4:30</span>
                    <span id="total-time">8:30</span>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-purple-600 text-white mt-10">
        <div class="container mx-auto py-6 px-4">
            <div class="flex justify-between">
                <p>&copy; Lumin 2024 | Hak Cipta Dilindungi</p>
                <div class="space-x-4">
                    <a href="#" class="hover:text-gray-300">Instagram</a>
                    <a href="#" class="hover:text-gray-300">Facebook</a>
                    <a href="#" class="hover:text-gray-300">Twitter</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Timer Logic
        let timerDisplay = document.getElementById('timer');
        let currentTimeDisplay = document.getElementById('current-time');
        let progressBar = document.getElementById('progress-bar');
        let playPauseBtn = document.getElementById('play-pause-btn');

        let totalSeconds = 510; // 8 minutes 30 seconds
        let currentSeconds = 270; // 4 minutes 30 seconds
        let isPlaying = true;

        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${String(minutes).padStart(2, '0')}:${String(remainingSeconds).padStart(2, '0')}`;
        }

        function updateUI() {
            timerDisplay.textContent = formatTime(totalSeconds - currentSeconds);
            currentTimeDisplay.textContent = formatTime(currentSeconds);
            progressBar.style.width = `${(currentSeconds / totalSeconds) * 100}%`;
        }

        function countdown() {
            if (isPlaying && currentSeconds < totalSeconds) {
                currentSeconds++;
                updateUI();
            }
        }

        playPauseBtn.addEventListener('click', () => {
            isPlaying = !isPlaying;
            playPauseBtn.textContent = isPlaying ? '⏸️' : '▶️';
        });

        setInterval(countdown, 1000);
    </script>

</body>
</html>
