<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edutrack</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="text-center">
            <h1 class="text-[#1A4B83] font-semibold text-5xl">Login EduTrack</h1>
            <p class="mt-6 font-quicksand font-semibold text-[#090A0B]  ">Inputkan Email dan Password anda</p>
        </div>

        <div class="w-1/2 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <img class="w-1/3 absolute top-0 right-0" src="{{ asset('assets/images/ellipse1.png') }}" alt="">

    <img class="w-1/3 absolute bottom-0 left-0" src="{{ asset('assets/images/ellipse2.png') }}" alt="">
</body>

</html>
