<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumin-Login</title>
    <link rel="stylesheet" href="{{ asset('admin/dist/css/style.css') }}">
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



</head>
<body class="bg-[#B0C5DE] flex justify-center">
    <div class="flex py-15 w-9/12 px-10">
      <!-- Form Section -->
        
        <div class="text-center text-white bg-white shadow-lg rounded-lg flex w-full px-20 mx-10 py-5 my-5">
          <img src="{{("../admin/dist/img/logo.png")}}" alt="LUMIN Logo" class="w-full">
        </div>
        
      </div>

      <div class="px-10 w-6/12 me-10">
        <p class="font-bold text-6xl font-dancing text-center text-[#311F3B] pt-5">Login</p>
        <div class="mt-4">
          <ul class="flex justify-between border-b-2 border-[#F0D7E7]">
            <li class="px-20 text-2xl font-semibold font-nunito border-b-2 border-[#492F59]  text-[#492F59] cursor-pointer">
              Login
            </li>
            <li class="px-20  text-2xl font-semibold font-nunito border-b-2 border-transparent hover:border-[#492F59] transition-colors duration-300 text-[#492F59] cursor-pointer">
              Register
            </li>
          </ul>
        </div>

        <form class="mt-6 space-y-1">
          <div class="py-2 relative">
            <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="text" placeholder="Username" class="w-full px-10 py-1 font-semibold font-nunito text-lg border shadow-[0_4px_6px_rgba(0,0,0,0.1)] border-gray-300 bg-[#D7E2EE] rounded-3xl">
          </div>
          <div class="py-2 relative">
            <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="password" placeholder="Password" class="w-full px-10 py-1 font-semibold font-nunito text-lg border shadow-[0_4px_6px_rgba(0,0,0,0.1)] border-gray-300 bg-[#D7E2EE] rounded-3xl">
          </div>
          <div>
            <ul class="flex py-2 px-0.5">
              <li class="text-[#646982] font-nunito font-normal text-xs">Don't have account?</li>
              <li class="text-[#623E76] font-nunito font-bold text-xs px-5">Sign Up</li>
            </ul>
            <p class="text-center font-nunito font-semibold">Or</p>
            <ul class="flex justify-center mt-3">
              <li class="bg-white rounded-full w-10 mx-3"><svg xmlns="http://www.w3.org/2000/svg" class="w-7 py-1 mx-1.5" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262" id="google"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg></li>
              <li class="bg-[#395998] rounded-full w-10 mx-3"><i class="fa-brands fa-facebook-f text-white mx-3.5 my-3"></i></li>
              <li class="bg-white rounded-full w-10 mx-3"><svg xmlns="http://www.w3.org/2000/svg" class="text-white w-4 mx-3 my-3" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></li>
            </ul>
            <i class="fa-brands fa-x-twitter px-1 text-[#395998]"></i>
          </div>
          <div>
          <button type="submit" class="w-full bg-[#2E588A] text-white rounded-xl hover:bg-blue-700 px-5 py-1.5 text-center me-1 mb-1">Login</button>
        </div>
        </form>

    </div>
  </body>
</html>