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
                    <img src="{{("../admin/dist/img/sadness.png")}}" alt="" class="w-24">
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
                        <img src="{{("../admin/dist/img/joy.png")}}" alt="" class="w-48">
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

        <section class="my-20 mx-1">
            <div class="bg-white w-full shadow-lg px-5 py-3 flex relative rounded-md">
                <img src="{{('../admin/dist/img/psicholog.png')}}" class="bg-gray-50 rounded-full w-20 h-20 border-black border-b-1 shadow-lg" alt="">
                <h3 class="align-bottom pt-8 ps-3 font-nunito font-bold">Counseling Registration</h3>
                <!-- Icon -->
                <div class="icon rounded-full border-2 border-[#471637] w-10 h-10 absolute top-3 right-3 flex items-center justify-center my-5">
                    <i class="fas fa-message text-[#471637]"></i>
                </div>
            </div>
        </section>
        

        <!-- Quotes -->
        <section class="container mx-auto px-4 my-20">
            <h3 class="text-2xl font-semibold my-2">Quotes</h3>
            <h3 class="text-sm my-2">Awali hari dengan Quotes yang indah</h3>
            
            <!-- Horizontal Scrollable Cards -->
            <div class="flex gap-3 overflow-x-auto scrollbar-hide p-2">
                <!-- Card 1 -->
                <div class="flex-none bg-white rounded-lg shadow-lg w-2/5 p-5 group relative overflow-hidden">
                    <div class="flex justify-end relative z-10">
                        <img src="{{("../admin/dist/img/logo.png")}}" alt="" class="w-full h-20" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20"></div>
                    <h4 class="absolute inset-0 flex items-center justify-center text-white font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-30">
                        General
                    </h4>
                </div>
    
                <!-- Card 2 -->
                <div class="flex-none bg-white rounded-lg shadow-lg w-2/5 p-5 group relative overflow-hidden">
                    <div class="flex justify-end relative z-10">
                        <img src="{{("../admin/dist/img/logo.png")}}" alt="" class="w-full h-20" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20"></div>
                    <h4 class="absolute inset-0 flex items-center justify-center text-white font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-30">
                        Personal Growth
                    </h4>
                </div>
    
                <!-- Card 3 -->
                <div class="flex-none bg-white rounded-lg shadow-lg w-2/5 p-5 group relative overflow-hidden">
                    <div class="flex justify-end relative z-10">
                        <img src="{{("../admin/dist/img/logo.png")}}" alt="" class="w-full h-20" />
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20"></div>
                    <h4 class="absolute inset-0 flex items-center justify-center text-white font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-30">
                        Work and Productivity
                    </h4>
                </div>
            </div>
        </section>

                <!-- Meditations -->
                <section class="container mx-auto px-4 my-20">
                    <h3 class="text-2xl font-semibold my-2">Popular Meditations</h3>
                    <h3 class="text-sm my-2">Menjadi lebih sehat dengan melakukan meditasi</h3>
                    
                    <!-- Horizontal Scrollable Cards -->
                    <div class="flex gap-3 overflow-x-auto scrollbar-hide p-2">
                        <!-- Card 1 -->
                        <div class="mx-12">
                            <!-- Card Container -->
                            <div class="bg-white rounded-lg shadow-lg w-full p-5 relative overflow-hidden">
                                <!-- Logo Section -->
                                <div class="flex justify-end relative z-10">
                                    <img src="{{('../admin/dist/img/logo.png')}}" alt="Logo" class="w-full h-20">
                                </div>
                            </div>
                        
                            <!-- Content Section -->
                            <div class="flex items-center mt-4 mx-2 space-x-4">
                                <!-- Text Section -->
                                <div class="tulisan">
                                    <h3 class="font-nunito font-extrabold text-lg">
                                        Meditasi Mindfulness
                                    </h3>
                                    <h4 class="font-nunito font-normal text-sm flex items-center space-x-2">
                                        <i class="fa-regular fa-hourglass"></i>
                                        <span>15 Minutes</span>
                                    </h4>
                                </div>
                        
                                <!-- Button -->
                                <button class="bg-[#2E588A] font-nunito font-extrabold rounded-lg text-white px-4 py-2">
                                    Start
                                </button>
                            </div>
                        </div>
                        
            
                        <!-- Card 2 -->
                        <div class="mx-12">
                            <!-- Card Container -->
                            <div class="bg-white rounded-lg shadow-lg w-full p-5 relative overflow-hidden">
                                <!-- Logo Section -->
                                <div class="flex justify-end relative z-10">
                                    <img src="{{('../admin/dist/img/logo.png')}}" alt="Logo" class="w-full h-20">
                                </div>
                            </div>
                        
                            <!-- Content Section -->
                            <div class="flex items-center mt-4 mx-2 space-x-4">
                                <!-- Text Section -->
                                <div class="tulisan">
                                    <h3 class="font-nunito font-extrabold text-lg">
                                        Meditasi Mindfulness
                                    </h3>
                                    <h4 class="font-nunito font-normal text-sm flex items-center space-x-2">
                                        <i class="fa-regular fa-hourglass"></i>
                                        <span>15 Minutes</span>
                                    </h4>
                                </div>
                        
                                <!-- Button -->
                                <button class="bg-[#2E588A] font-nunito font-extrabold rounded-lg text-white px-4 py-2">
                                    Start
                                </button>
                            </div>
                        </div>
            
                        <!-- Card 3 -->
                        <div class="mx-12">
                            <!-- Card Container -->
                            <div class="bg-white rounded-lg shadow-lg w-full p-5 relative overflow-hidden">
                                <!-- Logo Section -->
                                <div class="flex justify-end relative z-10">
                                    <img src="{{('../admin/dist/img/logo.png')}}" alt="Logo" class="w-full h-20">
                                </div>
                            </div>
                        
                            <!-- Content Section -->
                            <div class="flex items-center mt-4 mx-2 space-x-4">
                                <!-- Text Section -->
                                <div class="tulisan">
                                    <h3 class="font-nunito font-extrabold text-lg">
                                        Meditasi Mindfulness
                                    </h3>
                                    <h4 class="font-nunito font-normal text-sm flex items-center space-x-2">
                                        <i class="fa-regular fa-hourglass"></i>
                                        <span>15 Minutes</span>
                                    </h4>
                                </div>
                        
                                <!-- Button -->
                                <button class="bg-[#2E588A] font-nunito font-extrabold rounded-lg text-white px-4 py-2">
                                    Start
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <!--- Music -->

                <section class="flex flex-col items-center m-5">
                    <h1 class="text-center font-nunito font-extrabold text-3xl text-[#6B2152]">JOURNEY WITH MUSIC <br> TO MENTAL HEALTH</h1>
                    <div class="flex justify-between w-4/5 h-full py-5">
                    <!-- Wrapper untuk Card pertama dan ketiga -->
                        <!-- Card pertama -->
                        <div class="bg-white rounded-lg shadow-lg w-1/3 h-60 p-5 mt-auto">Card 1</div>
                        <!-- Card kedua (Tinggi lebih panjang, berada di tengah atas) -->
                    <div class="bg-white rounded-lg shadow-lg w-1/3 h-96 p-5">Card 2</div>
                        <!-- Card ketiga -->
                        <div class="bg-white rounded-lg shadow-lg w-1/3 h-40 p-5 mt-auto">Card 3</div>
                    </div>
                </section>


                <!-- Article Section -->
                <section class="bg-gray-100 py-8">
                    <div class="container mx-auto px-4">
                    <!-- Section Title -->
                    <div class="border-l-4 border-[#623E76] pl-4 mb-6">
                        <h1 class="font-nunito font-bold text-3xl">What New Today</h1>
                    </div>
                
                    <!-- Content Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Left Large Column -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                        <!-- Placeholder for content -->
                        <p class="text-center text-gray-500">Large article section (add content here).</p>
                        </div>
                
                        <!-- Right Column -->
                        <div class="lg:col-span-2 grid gap-6">
                        <!-- Article Card -->
                        <div class="flex items-start">
                            <!-- Thumbnail -->
                            <div class="bg-gray-200 rounded-lg w-2/5 h-28"></div>
                            <!-- Article Details -->
                            <div class="ml-4 flex flex-col justify-between">
                            <!-- Category Label -->
                            <span class="bg-[#88A8CD] text-white font-nunito w-3/12 text-center font-semibold rounded-full px-3 py-1 text-xs">
                                Health
                            </span>
                            <!-- Title -->
                            <h2 class="mt-2 text-base font-semibold">
                                Viral! Fufufafa adalah Gibran Rakabuming
                            </h2>
                            <!-- Date -->
                            <div class="flex items-center text-xs text-gray-500 mt-2">
                                <i class="fas fa-calendar"></i>
                                <p class="ml-1">October 22, 2024</p>
                            </div>
                            </div>
                        </div>
                
                        <!-- Repeat Article Card -->
                        <div class="flex items-start">
                            <div class="bg-gray-200 rounded-lg w-2/5 h-28"></div>
                            <div class="ml-4 flex flex-col justify-between">
                            <span class="bg-[#88A8CD] text-white font-nunito w-3/12 text-center font-semibold rounded-full px-3 py-1 text-xs">
                                Health
                            </span>
                            <h2 class="mt-2 text-base font-semibold">
                                Viral! Fufufafa adalah Gibran Rakabuming
                            </h2>
                            <div class="flex items-center text-xs text-gray-500 mt-2">
                                <i class="fas fa-calendar"></i>
                                <p class="ml-1">October 22, 2024</p>
                            </div>
                            </div>
                        </div>
                
                        <!-- Repeat Article Card -->
                        <div class="flex items-start">
                            <div class="bg-gray-200 rounded-lg w-2/5 h-28"></div>
                            <div class="ml-4 flex flex-col justify-between">
                            <span class="bg-[#88A8CD] text-white font-nunito w-3/12 text-center font-semibold rounded-full px-3 py-1 text-xs">
                                Health
                            </span>
                            <h2 class="mt-2 text-base font-semibold">
                                Viral! Fufufafa adalah Gibran Rakabuming
                            </h2>
                            <div class="flex items-center text-xs text-gray-500 mt-2">
                                <i class="fas fa-calendar"></i>
                                <p class="ml-1">October 22, 2024</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
    </x-slot>
    
</x-layout>

<x-footer></x-footer>