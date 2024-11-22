<x-navbar></x-navbar>
<x-layout> 
    <x-slot name="page_name">Lumin-App</x-slot>
    <x-slot name="page_header">
        <body class="bg-blue-50">
            <!-- Carousel Section -->
            <section class="container mx-auto mt-10 mb-10 px-4">
                <div class="relative">
                    <!-- Carousel Container -->
                    <div id="carousel" class="overflow-hidden rounded-lg shadow-2xl">
                        <div class="flex transition-transform duration-700 ease-out" style="width: 300%; transform: translateX(0);">
                            <!-- Slide 1 -->
                            <div class="w-full flex-shrink-0">
                                <img src="" class="w-full h-64 object-cover" alt="Meditation 1">
                            </div>
                            <!-- Slide 2 -->
                            <div class="w-full flex-shrink-0">
                                <img src="https://via.placeholder.com/1200x400?text=Intro+to+Meditations+2" class="w-full h-64 object-cover" alt="Meditation 2">
                            </div>
                            <!-- Slide 3 -->
                            <div class="w-full flex-shrink-0">
                                <img src="https://via.placeholder.com/1200x400?text=Intro+to+Meditations+3" class="w-full h-64 object-cover" alt="Meditation 3">
                            </div>
                        </div>
                    </div>
        
                    <!-- Carousel Controls -->
                    <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-600 text-white p-2 rounded-full hover:bg-gray-800">
                        &larr;
                    </button>
                    <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-600 text-white p-2 rounded-full hover:bg-gray-800">
                        &rarr;
                    </button>
                </div>
            </section>
        
            <!-- JavaScript for Carousel Functionality -->
            <script>
                const carousel = document.getElementById('carousel');
                const slides = carousel.children[0];
                const totalSlides = slides.children.length;
                const prevBtn = document.getElementById('prev');
                const nextBtn = document.getElementById('next');
                let currentIndex = 0;
        
                prevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
                    updateCarousel();
                });
        
                nextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
                    updateCarousel();
                });
        
                function updateCarousel() {
                    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
                }
            </script>
        </body>  
    </x-slot>
    <x-slot name="page_content">
        <section class="container m-2 p-2">
            <h3 class="text-2xl font-semibold mb-6">Daily Emotions</h3>
            <h3 class="text-sm">Bagaimana Persaanmu Hari Ini</h3>
            
            <!-- Horizontal Scrollable Cards -->
            <div class="flex gap-5 overflow-x-auto py-10">
                <!-- Card 1 -->
                <div class="flex-none rounded-lg m-0 p-0 mx-10 px-10">
                    <img src="{{ asset ("admin/dist/img/sadness.png")}}" alt="" class="w-24">
                    <h4 class="font-semibold mt-4">I'm Feeling Sad</h4>
                </div>
    
                <!-- Card 2 -->
                <div class="flex-none rounded-lg m-0 p-0 mx-10 px-10">
                        <img src="{{("../admin/dist/img/ennui.png")}}" alt="" class="w-36">
                        <h4 class="font-semibold mt-4 text-start px-5">I'm Feeling Ennui</h4>
                </div>
    
                <!-- Card 3 -->
                <div class="flex-none rounded-lg m-0 p-0 mx-10 px-10">
                    <div class="flex-none rounded-lg w-30">
                        <img src="{{ asset("admin/dist/img/joy.jpg")}}" alt="" class="w-48">
                        <h4 class="font-semibold mt-4 text-start px-5">I'm Feeling Joy</h4>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex-none rounded-lg m-0 p-0 mx-10 px-10">
                    <img src="{{("../admin/dist/img/anxiety.png")}}" alt="" class="w-36">
                    <h4 class="font-semibold mt-4 text-start px-5">I'm Feeling Anxiety</h4>
                </div>
    
                <!-- Card 5 -->
                <div class="flex-none rounded-lg m-0 p-0 mx-10 px-10">
                    <img src="{{("../admin/dist/img/anger.png")}}" alt="" class="w-24">
                    <h4 class="font-semibold mt-4">I'm Feeling Anger</h4>
                </div>
    
            </div>
        </section>

        <!-- Consuling -->

        <section class="my-2">
            <div class="bg-white w-full shadow-lg">
                <img src="{{("../admin/dist/img/psicholog.png")}}" class="bg-gray-50 rounded-full w-24 border-" alt="">
                <h3>Counseling Registration</h3>

            </div>
        </section>

        <!-- Quotes -->
        <section class="container mx-auto mt-10 px-4">
            <h3 class="text-2xl font-semibold mb-6">Quotes</h3>
            <h3 class="text-sm">Awali hari dengan Quotes yang indah</h3>
            
            <!-- Horizontal Scrollable Cards -->
            <div class="flex gap-3 overflow-x-auto scrollbar-hide p-2">
                <!-- Card 1 -->
                <div class="flex-none bg-white rounded-lg shadow-lg w-64 p-5">
                    <div class="flex justify-end">
                        <button>
                            <svg class="h-6 w-6 text-gray-400 hover:text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </button>
                    </div>
                    <h4 class="font-semibold mt-4">Stretching Yoga</h4>
                    <p class="text-gray-500 text-sm mt-2">Memulai pelatihan pikiran dengan aman dan juga nyaman.</p>
                    <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4">Start</button>
                </div>
    
                <!-- Card 2 -->
                <div class="flex-none bg-white rounded-lg shadow-lg w-64 p-5">
                    <div class="flex justify-end">
                        <button>
                            <svg class="h-6 w-6 text-gray-400 hover:text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </button>
                    </div>
                    <h4 class="font-semibold mt-4">Breathing Exercises</h4>
                    <p class="text-gray-500 text-sm mt-2">Latihan pernapasan untuk relaksasi pikiran.</p>
                    <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4">Start</button>
                </div>
    
                <!-- Card 3 -->
                <div class="flex-none bg-white rounded-lg shadow-lg w-64 p-5">
                    <div class="flex justify-end">
                        <button>
                            <svg class="h-6 w-6 text-gray-400 hover:text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </button>
                    </div>
                    <h4 class="font-semibold mt-4">Guided Meditation</h4>
                    <p class="text-gray-500 text-sm mt-2">Meditasi terpandu untuk ketenangan jiwa.</p>
                    <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4">Start</button>
                </div>
    
                <!-- Card 4 -->
                <div class="flex-none bg-white rounded-lg shadow-lg w-64 p-5">
                    <div class="flex justify-end">
                        <button>
                            <svg class="h-6 w-6 text-gray-400 hover:text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </button>
                    </div>
                    <h4 class="font-semibold mt-4">Relaxing Music</h4>
                    <p class="text-gray-500 text-sm mt-2">Musik relaksasi untuk tidur nyenyak.</p>
                    <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4">Start</button>
                </div>
            </div>
        </section>
    </x-slot>
    
</x-layout>

<x-footer></x-footer>