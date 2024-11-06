<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumin-Web</title>
    <link rel="stylesheet" href="{{ asset('admin/dist/css/style.css') }}">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <div>
        <ol>
            <li>{{ $page_name }}</li>
        </ol>
    </div>
</body>
</html>