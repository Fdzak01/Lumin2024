<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning - Tailwind</title>
    <link rel="stylesheet" href="{{ asset('admin/dist/css/style.css') }}">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <h1 class="text-5xl font-bold text-blue-950">Welcome Developers!</h1>
    <a href="#" class="bg-blue-800 p-3 text-white inline-block rounded shadow-2xl hover:bg-yellow-400">ini tombol</a>
    <a href="#" class="bg-green-800 p-3 text-white inline-block rounded shadow hover:bg-red-800">ini tombol</a>
    <p class="m-3 bg-yellow-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptate obcaecati ducimus maxime voluptatem consequatur delectus neque, provident esse a eius autem quasi sapiente est libero temporibus fugiat ipsa, repellat ut ipsam non atque cumque sed. Dolores libero aliquam dolorem, eum, animi officiis temporibus cupiditate ea expedita, alias odit. Dicta!</p>

    <div class="bg-green-300 p-30 m-10 text-red inline-block rounded">
        ilyas
    </div>
    <a href="" class="bg-blue-800 p-3 text-white inline-block rounded shadow-2xl hover:bg-yellow-400"></a>
</body>
</html>