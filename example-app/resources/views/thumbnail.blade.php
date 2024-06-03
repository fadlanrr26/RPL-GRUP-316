<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edutrack</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-no-repeat py-16 px-32" style="background-image: linear-gradient(#1A4B83, white);">
    <div class="text-center">
        <h1 class="font-blackHanSansRegular text-4xl text-[#F5F5DC]">EduTrack</h1>
        <p class="text-white">Track your activity here!</p>
    </div>
    <div class="flex mt-16 px-20">
        <div class="flex flex-col gap-y-10 w-1/2">
            <h1 class="font-blackHanSansRegular text-6xl text-[#F5F5DC]">Welcome To<br> EduTrack</h1>
            <p class="text-xl font-semibold font-quicksand">Raih informasi dan perkembangan<br> akademik anak di sekolah secara<br> real-time.</p>
            <a href="{{ route('login') }}" class="bg-[#286EBD] px-6 py-4 text-white w-fit">Login</a>
            <p>New user? <a href="{{ route('registerGuru') }}" class="underline">Register Here!</a></p>
        </div>
        <div class="grid place-items-center w-1/2">
            <img class="w-2/3" src="{{ asset('assets/images/background.png') }}" alt="Photo">
        </div>
    </div>
</body>

</html>
