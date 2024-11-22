<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_header"></x-slot>

    <x-slot name="page_content">
        <div class="bg-cover bg-center font-sans" style="background-image: url('/admin/dist/img/logo.png')">
            <!-- Main Content -->
            <main clasAs="container mx-auto px-4 mt-10 mb-10 flex justify-center items-center">
                <div class="bg-white bg-opacity-90 rounded-lg shadow-lg p-8 text-center max-w-2xl mt-24 mb-24">
                    <blockquote class="text-2xl md:text-4xl font-bold text-gray-800 leading-relaxed">
                        "Pertumbuhan bukan tentang mencapai kesempurnaan, tetapi tentang terus berusaha menjadi lebih baik setiap harinya."
                    </blockquote>
                    <p class="mt-6 text-lg text-gray-500">03 November 2024, Lumin</p>
                </div>
            </main>

        </div>

    </x-slot>
</x-layout>

<x-footer></x-footer>
<!-- style="background-image: url('/admin/dist/img/logo.png'); -->