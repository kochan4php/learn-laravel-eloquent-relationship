<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Laravel Relationship</title>
</head>

<body>
    @include('layouts.navbar')

    <div class="container my-4">
        @yield('container')
    </div>
</body>

</html>
