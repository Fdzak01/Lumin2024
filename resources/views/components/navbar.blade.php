<!-- Navbar -->
<header class="bg-blue-100 shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{("admin/dist/img/logo.png")}}" alt="Logo" class="w-8 h-8 mr-2"> <!-- Ganti dengan logo Anda -->
            <span class="text-purple-600 text-lg font-semibold">Lumin</span>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menuButton" class="lg:hidden flex items-center text-purple-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navigation Links (Hidden on small screens, visible on large screens) -->
        <nav id="navLinks" class="hidden lg:flex space-x-8">
            <a href="/" class="text-gray-800 hover:text-purple-600 font-medium">Home</a>
            <a href="/mood" class="text-gray-800 hover:text-purple-600 font-medium">History Emotions</a>
            <a href="/article" class="text-gray-800 hover:text-purple-600 font-medium">Article</a>
            <a href="/meditation" class="text-gray-800 hover:text-purple-600 font-medium">Meditation</a>
            <a href="/conseling" class="text-gray-800 hover:text-purple-600 font-medium">Conseling</a>
        </nav>

        <!-- Sign In Button (Hidden on small screens, visible on large screens) -->
        <a href="#" class="hidden lg:flex bg-purple-800 text-white px-4 py-2 rounded-lg items-center hover:bg-purple-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v4H5a1 1 0 000 2h4v4a1 1 0 102 0V9h4a1 1 0 000-2h-4V3a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            Sign In
        </a>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="lg:hidden hidden flex-col mt-4 px-6 space-y-4">
        <a href="#" class="text-gray-800 hover:text-purple-600 font-medium block">Home</a>
        <a href="#" class="text-gray-800 hover:text-purple-600 font-medium block">History Emotions</a>
        <a href="#" class="text-gray-800 hover:text-purple-600 font-medium block">Artikel</a>
        <a href="#" class="text-gray-800 hover:text-purple-600 font-medium block">Meditation</a>
        <a href="#" class="text-gray-800 hover:text-purple-600 font-medium block">Konseling</a>
        <a href="#" class="bg-purple-800 text-white px-4 py-2 rounded-lg flex items-center justify-center hover:bg-purple-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v4H5a1 1 0 000 2h4v4a1 1 0 102 0V9h4a1 1 0 000-2h-4V3a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            Sign In
        </a>
    </div>
</header>

<!-- JavaScript for Mobile Toggle -->
<script>
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
