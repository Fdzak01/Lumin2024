<x-navbar></x-navbar>

<x-layout>
    <x-slot name="page_name">Lumin-App</x-slot>
    <x-slot name="page_header"></x-slot>
    <x-slot name="page_content">
        <body class="bg-blue-50">
            <!-- Carousel Section -->
            <section class="container mx-auto mt-10 px-4">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <!-- Title and Description -->
                    <h2 class="text-2xl font-bold text-center mb-2">Intro to Meditation</h2>
                    <p class="text-center text-gray-600">8 minutes 30 seconds</p>
                    <div class="mt-6">
                        <!-- Carousel -->
                        <div class="relative overflow-hidden">
                            <div class="flex transition-transform duration-500" id="carousel">
                                <!-- Slide 1 -->
                                <div class="flex-none w-full p-4">
                                    <div class="bg-gray-200 h-40 rounded-lg flex items-center justify-center">
                                        <p class="text-gray-500">Slide 1 Content</p>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="flex-none w-full p-4">
                                    <div class="bg-gray-200 h-40 rounded-lg flex items-center justify-center">
                                        <p class="text-gray-500">Slide 2 Content</p>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="flex-none w-full p-4">
                                    <div class="bg-gray-200 h-40 rounded-lg flex items-center justify-center">
                                        <p class="text-gray-500">Slide 3 Content</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation Buttons -->
                            <button id="prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-blue-500 text-white p-2 rounded-full">
                                &lt;
                            </button>
                            <button id="next" class="absolute right-0 top-1/2 -translate-y-1/2 bg-blue-500 text-white p-2 rounded-full">
                                &gt;
                            </button>
                        </div>
                    </div>
                    <!-- Description Section -->
                    <div class="mt-6 text-center">
                        <p class="text-gray-700">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae augue et justo sodales varius.
                            Donec nec lorem eu orci feugiat venenatis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias temporibus impedit, molestiae velit suscipit id ab? Ex qui amet porro eaque autem tempore, laboriosam alias. In, possimus non! Modi ea laudantium nihil obcaecati? Odit nam similique pariatur alias ipsa libero, quibusdam quo eum, soluta quam mollitia blanditiis nostrum, error deleniti dolor atque? Ratione ex vero ducimus odit ab neque in modi, eligendi corrupti consectetur eos libero. Iure aliquam, hic minus dicta officia minima. Optio nulla soluta corporis delectus. Modi corporis eum, porro sint dignissimos voluptates maiores ipsum facere nemo sequi cumque odio labore voluptate nam, blanditiis aliquid saepe aspernatur velit!
                        </p>
                        <p class="text-gray-700 mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quaerat optio architecto ab totam sapiente ipsam officia qui culpa maiores aperiam nihil modi laudantium sequi reprehenderit eius, voluptate illum quisquam placeat ipsa cum. Magni provident porro exercitationem reprehenderit debitis corrupti fugit perspiciatis nesciunt modi eos, culpa architecto. Obcaecati quod harum, accusamus, vero, minima ullam eaque eveniet corporis tempore et repellendus molestias! Iure optio at repellendus magni ad fugiat inventore facilis praesentium commodi odio! Saepe suscipit incidunt libero! Est, saepe, fugiat libero perspiciatis consectetur, sint vero sunt vitae ipsam nobis corporis!
                        </p>
                    </div>
                    <!-- Start Button -->
                    <div class="mt-6 flex justify-center">
                        <button class="bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600">
                            Start
                        </button>
                    </div>
                </div>
            </section>
        </body>
    </x-slot>
</x-layout>


<x-footer></x-footer>
