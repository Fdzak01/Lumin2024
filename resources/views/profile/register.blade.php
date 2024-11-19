<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumin-Web</title>
    <link rel="stylesheet" href="{{ asset('admin/dist/css/style.css') }}">
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



</head>
<body class="bg-[#B0C5DE] flex justify-center">
    <div class="flex py-5 w-9/12">
      <!-- Form Section -->
      <div class="px-5 w-full">
        <p class="font-bold text-6xl font-dancing text-center text-[#311F3B] pt-5">Register</p>
        <div class="mt-4">
          <ul class="flex justify-between border-b-2 border-[#F0D7E7]">
            <li class="px-20 py-2 text-2xl font-semibold font-nunito border-b-2 hover:border-[#492F59] transition-colors duration-300 text-[#492F59] cursor-pointer">
              Login
            </li>
            <li class="px-20 py-2 text-2xl font-semibold font-nunito border-b-2 border-[#492F59] text-[#492F59] cursor-pointer">
              Register
            </li>
          </ul>
        </div>
        

        <form class="mt-6 space-y-1">
          <div class="py-2 relative">
            <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="text" placeholder="Full Name" class="w-full px-10  py-1 font-semibold font-nunito text-lg border shadow-[0_4px_6px_rgba(0,0,0,0.1)] border-gray-300 bg-[#D7E2EE] rounded-3xl">
          </div>
          <div class="py-2 relative">
            <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="text" placeholder="Username" class="w-full px-10 py-1 font-semibold font-nunito text-lg border shadow-[0_4px_6px_rgba(0,0,0,0.1)] border-gray-300 bg-[#D7E2EE] rounded-3xl">
          </div>
          <div class="py-2 relative">
            <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="email" placeholder="Email" class="w-full px-10 py-1 font-semibold font-nunito text-lg border shadow-[0_4px_6px_rgba(0,0,0,0.1)] border-gray-300 bg-[#D7E2EE] rounded-3xl">
          </div>
          <div class="py-2 relative">
            <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="password" placeholder="Password" class="w-full px-10 py-1 font-semibold font-nunito text-lg border shadow-[0_4px_6px_rgba(0,0,0,0.1)] border-gray-300 bg-[#D7E2EE] rounded-3xl">
          </div>
          <div class="py-2 relative">
            <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="password" placeholder="Re-Type" class="w-full px-10 py-1 font-semibold font-nunito text-lg border shadow-[0_4px_6px_rgba(0,0,0,0.1)] border-gray-300 bg-[#D7E2EE] rounded-3xl">
          </div>
          <div class="pt-2">
          <button type="submit" class="w-full bg-[#2E588A] text-white py-1 rounded-xl hover:bg-blue-700">Register</button>
        </div>
        </form>
      </div>


        <div class="text-center text-white bg-white shadow-lg rounded-lg flex w-full px-10">
          <img src="{{("../admin/dist/img/logo.png")}}" alt="LUMIN Logo" class="w-full">
        </div>

    </div>
  </body>
</html>