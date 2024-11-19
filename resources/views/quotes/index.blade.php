<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_header">Lumin-App</x-slot>

    <x-slot name="page_content">
        <div class="relative h-screen bg-cover bg-center" style="background-image: url('/admin/dist/img/logo.png');">
            <!-- Layer overlay untuk kontras -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>

            <!-- Konten teks -->
            <div class="relative z-10 flex items-center justify-center h-full">
                <div class="text-center">
                    <h1 class="text-4xl font-bold mb-4 text-white">
                        "Pertumbuhan bukan tentang mencapai kesempurnaan, tetapi tentang terus berusaha menjadi lebih baik setiap harinya."
                    </h1>
                    <p class="text-gray-300 text-lg">
                        03 November 2024, Lumin
                    </p>
                </div>
            </div>
        </div>

    </x-slot>
</x-layout>

<x-footer></x-footer>