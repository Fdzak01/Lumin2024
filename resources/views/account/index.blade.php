<x-navbar></x-navbar>
<x-layout>
    <x-slot name="page_header">Lumin-App</x-slot>

    <x-slot name="page_content">
        <!-- Profile Card -->
        <div class="flex-grow flex items-center justify-center py-10">
            <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-semibold">Account</h2>
                    <button class="text-blue-500 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 4H10.172C9.52 4 9 4.52 9 5.172V7H15V5.172C15 4.52 14.48 4 13.828 4zM5 7H19V21H5z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center mb-4">
                    <img src="profile-picture.jpg" alt="Profile Picture" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h3 class="text-xl font-medium">Helios</h3>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="font-semibold">Full Name</p>
                    <p>Hilmi Kamil</p>
                </div>
                <div class="mb-4">
                    <p class="font-semibold">Username</p>
                    <p>Helios</p>
                </div>
                <div class="mb-6">
                    <p class="font-semibold">Email</p>
                    <p>hilmi@gmail.com</p>
                </div>
                <button class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600">Logout</button>
            </div>
        </div>
</x-layout>

<x-footer></x-footer>