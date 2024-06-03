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
    <div class="min-h-screen flex flex-col items-center p-16 bg-gray-100">
        <div class="text-center">
            <h1 class="text-[#1A4B83] font-semibold text-5xl">Register EduTrack</h1>
            <h2 class="text-[#1A4B83] font-semibold text-3xl">Wali Murid</h2>
            <p class="mt-6 font-quicksand font-semibold text-[#090A0B]  ">Inputkan data diri Anda untuk pembuatan akun
                baru.<br>
                Kamu dapat menambahkan info tambahan setelah registrasi.</p>
        </div>

        <div class="w-1/2 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <input type="hidden" name="role" value="wali murid">
                <div class="flex items-center justify-evenly gap-x-5">
                    <!-- Name -->
                    <div class="w-full mt-3">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="w-full mt-3">
                        <x-input-label for="no_telepon" :value="__('Nomor Telepon')" />
                        <x-text-input id="no_telepon" class="block mt-1 w-full" type="text" name="no_telepon"
                            :value="old('no_telepon')" required autocomplete="no_telepon" />
                        <x-input-error :messages="$errors->get('no_telepon')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-evenly gap-x-5">
                    <div class="w-full mt-3">
                        <x-input-label for="username" :value="__('Username')" />
                        <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                            :value="old('username')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="w-full mt-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Password -->
                <div class="flex items-center justify-evenly gap-x-5">

                    <div class="w-full mt-3">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="w-full mt-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                <!-- id_anak -->
                <div class="w-full mt-3">
                    <x-input-label for="id_anak" :value="__('Nama Murid')" />
                    <select name="id_anak" id="id_anak"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        required>
                        <option value="">Pilih Nama Murid</option>
                        @foreach($students as $student)
                        <option value="{{ $student->id}}">{{ $student->name }} ({{ $student->level }})</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('id_anak')" class="mt-2" />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <img class="w-1/3 absolute top-0 right-0" src="{{ asset('assets/images/ellipse1.png') }}" alt="">
    <img class="w-1/3 absolute bottom-0 left-0" src="{{ asset('assets/images/ellipse2.png') }}" alt="">
</body>

</html>
