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
    <div class="px-20 flex flex-col justify-center" style="height: 72vh;">
        <h1 class="text-white text-center font-blackHanSansRegular text-4xl">Pilih Posisi Anda</h1>
<<<<<<< HEAD
        <div class="flex items-center justify-center gap-x-10 mt-16">
            <a href="{{ route('registerGuru') }}" class="w-2/12 text-center py-6 text-white bg-[#FCC43E] text-xl font-semibold hover:bg-[#ba994c] transition-all">Guru</a>
            <a href="{{ route('registerWaliMurid') }}" class="w-2/12 text-center py-6 text-white bg-[#FCC43E] text-xl font-semibold hover:bg-[#ba994c] transition-all">Wali Murid</a>
        </div>
=======
        <form action="{{ route('register') }}" method="post" class="flex items-center justify-center gap-x-10 mt-16">
            @csrf
            <button type="submit" name="role" value="guru" class="w-2/12 py-6 text-white bg-[#FCC43E] text-xl font-semibold hover:bg-[#ba994c] transition-all">Guru</button>
            <button type="submit" name="role" value="wali murid" class="w-2/12 py-6 text-white bg-[#FCC43E] text-xl font-semibold hover:bg-[#ba994c] transition-all">Wali Murid</button>
        </form>
>>>>>>> 0d3be9ee3badf68b6f086e698473f707e7bc6886
    </div>
</body>

</html>
