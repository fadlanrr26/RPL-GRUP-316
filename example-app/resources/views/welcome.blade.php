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

<body class="">
    <navbar>
        <div class="bg-[#007EC5] px-16 py-4 flex justify-between items-center" style="height: 12vh;">
            <h1 class="font-blackHanSansRegular text-4xl text-[#F5F5DC]">EduTrack</h1>
            <a href="{{ route('thumbnail') }}" class="border border-white px-5 py-2 text-white rounded-lg">Go to app</a>
        </div>
        <div class="bg-[#015483] px-16 py-2" style="height: 6vh;">
            <h1 class="font-quicksand font-bold text-white">Track your activity here!</h1>
        </div>
    </navbar>
    <div class="flex px-28 py-20" style="height: 82vh;">
        <div class="w-3/5 font-montserrat">
            <h1 class="text-[#007EC5] font-semibold text-3xl">Raih Informasi dan Perkembangan<br> akademik anak di sekolah secara REAL-<br>TIME.</h1>
            <div class="mt-20 flex items-center gap-x-12">
                <a href="{{ route('thumbnail') }}" class="border border-[#007EC5] px-10 py-4 text-white bg-[#007EC5] rounded-xl">Get Started</a>
                <a href="{{ route('thumbnail') }}" class="border border-[#007EC5] px-10 py-4 text-[#007EC5] rounded-xl">Learn More</a>
            </div>
            <div class="flex items-center gap-x-16 mt-10">
                <div class="text-center">
                    <h1 class="font-semibold text-xl text-[#007EC5]">100K+</h1>
                    <p class="font-medium text-[#007EC5]">Students</p>
                </div>
                <div class="text-center">
                    <h1 class="font-semibold text-xl text-[#007EC5]">1K+</h1>
                    <p class="font-medium text-[#007EC5]">Indicators</p>
                </div>
                <div class="text-center">
                    <h1 class="font-semibold text-xl text-[#007EC5]">100+</h1>
                    <p class="font-medium text-[#007EC5]">Students</p>
                </div>
            </div>
        </div>
        <div class="w-2/5 relative">
            <img class="w-3/5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="{{ asset('assets/images/background.png') }}" alt="Photo">
            <img class="w-2/5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" src="{{ asset('assets/images/ba.png') }}" alt="Photo">
        </div>
    </div>
</body>

</html>
