<x-navbar></x-navbar>
<x-layout>
    <x-slot name="page_header">
    </x-slot>
    <x-slot name="page_content">
        <!-- Form Section -->
        <div class="bg-white shadow-md rounded-md p-4 max-w-md mx-auto">
            <h2 class="text-lg font-bold mb-4">Pengajuan Konseling</h2>
            <div class="mb-2">
                <label for="namaLengkap" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                <input type="text" id="namaLengkap" value="Ilyas Abdul Aziz Ps.g" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-2">
                <label for="namaPsikolog" class="block text-gray-700 text-sm font-bold mb-2">Nama Psikolog</label>
                <select id="namaPsikolog" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="Ilyas Abdul Aziz Ps.g" selected>Ilyas Abdul Aziz Ps.g</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="tanggalKonseling" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Konseling</label>
                <input type="date" id="tanggalKonseling" value="2024-03-11" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-2">
                <label for="jamKonseling" class="block text-gray-700 text-sm font-bold mb-2">Jam Konseling</label>
                <input type="time" id="jamKonseling" value="12:00" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button class="bg-black text-white font-bold py-2 px-4 rounded">Batal</button>
            <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Kirim</button>
        </div>
    </x-slot>
</x-layout>
<x-footer></x-footer>