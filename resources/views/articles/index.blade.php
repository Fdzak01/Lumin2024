<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_header">Lumin-App</x-slot>

    <x-slot name="page_content">
        <!-- Main Content -->
        <div class="container mx-auto px-4 py-10">
            <!-- Back Button -->
            <div
                class="flex items-center text-gray-700 hover:text-blue-500 mb-4"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 mr-2"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 19l-7-7 7-7"
                    />
                </svg>
                <a href="/">Kembali</a>
            </div>

            <!-- Article Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-2">
                    Mindfulness dan Kesehatan Mental: Cara Hidup di Saat Ini
                    untuk Mengurangi Stres
                </h1>
                <p class="text-sm text-gray-500 mb-6">
                    Nov 18, 2024 • 5 min read
                </p>
                <div class="bg-blue-200 h-56 mb-6"></div>
                <!-- Placeholder untuk gambar artikel -->

                <p class="text-gray-800 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent pharetra vitae augue in gravida. Sed vitae ex et
                    nisl cursus, auctor scelerisque augue ac, blandit lorem.
                    Quisque eget erat quis felis cursus auctor. Donec vel libero
                    tincidunt, ultrices nunc non, interdum lorem. Suspendisse
                    potenti. Cras congue facilisis lorem, at tristique purus
                    facilisis vel.
                </p>
                <p class="text-gray-800 mb-4">
                    Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia curae; Integer varius lacus sit
                    amet dolor hendrerit, at lacinia massa pharetra. In aliquet
                    libero in arcu fermentum lacinia. Aliquam erat volutpat.
                    Donec vitae eros a odio malesuada pharetra. Ut non ligula at
                    ligula blandit accumsan nec at augue.
                </p>
                <p class="text-gray-800 mb-4">
                    Morbi fermentum est non arcu, consectetur adipiscing elit.
                    Praesent pharetra vitae augue in gravida. Sed vitae ex et
                    nisl cursus, auctor scelerisque augue ac, blandit lorem.
                    Quisque eget erat quis felis cursus auctor. Donec vel libero
                    tincidunt, ultrices nunc non, interdum lorem. Suspendisse
                    potenti. Cras congue facilisis lorem, at tristique purus
                    facilisis vel.
                </p>
            </div>
        </div>
    </x-slot>
</x-layout>

<x-footer></x-footer>
