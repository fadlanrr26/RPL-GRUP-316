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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Scripts -->

    <!-- Sweetalert -->
    <script src="sweetalert2.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Sweetalert -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased flex">
    <aside id="sidebar-multi-level-sidebar" style="width: 18vw;"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-5 py-8 overflow-y-auto bg-[#19559A]">
            <h1 class="text-3xl font-blackHanSansRegular text-[#F5F5DC]">EduTrack</h1>
            @role('wali murid')
            <ul class="space-y-2 font-medium mt-5">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Konsultasi</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] pr-4 pl-8 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-lg">Daftar
                                Konsultasi</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] pr-4 pl-8 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-lg">Feedback</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Akademik</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl"
                        aria-controls="dropdown-administrasi" data-collapse-toggle="dropdown-administrasi">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Administrasi</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-administrasi" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] pr-4 pl-8 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-lg">Detail
                                Pembayaran</a>
                        </li>
                    </ul>
                </li>
            </ul>
            @elserole('guru')
            <ul class="space-y-2 font-medium mt-5">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl"
                        aria-controls="dropdown-konsultasi" data-collapse-toggle="dropdown-konsultasi">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Konsultasi</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-konsultasi" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('jadwalKonsultasi') }}"
                                class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] pr-4 pl-8 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-lg">
                                Jadwal Konsultasi</a>
                        </li>
                        <li>
                            <a href="{{ route('feedbackKonsultasi') }}"
                                class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] pr-4 pl-8 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-lg">
                                Feedback</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Akademik</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('inputMateri') }}"
                                class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] pr-4 pl-8 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-lg">
                                Input Materi</a>
                        </li>
                        <li>
                            <a href="{{ route('inputTugas') }}"
                                class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] pr-4 pl-8 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-lg">
                                Input Tugas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('administrasi') }}"
                        class="flex hover:bg-[#F5F5DC] hover:text-[#19559A] px-4 py-2 transition-all rounded-lg cursor-pointer gap-x-3 items-center text-[#F5F5DC] font-medium text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Administrasi</span>
                    </a>
                </li>
            </ul>
            @endrole
        </div>
    </aside>
    <div style="width: 18vw;" class="h-full"></div>
    <div class="bg-gray-100 min-h-screen w-full" style="width: 82vw;">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="p-10">
            {{ $slot }}
        </main>
    </div>

    <!-- Sweetalert -->
    @if($message = Session::get('message'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{!! $message !!}",
        })

    </script>
    @elseif( $warning = Session::get('warning'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Information',
            text: "{!! $warning !!}",
        })

    </script>
    @elseif(Session::get('error'))
    <script>
        Swal.fire('{!! json_encode(Session::get("error")) !!}')

    </script>
    @endif
    <!-- Sweetalert -->
</body>

</html>
