<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > Lomba</h1>
    <hr class="border-2 shadow">

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-lg">Lomba yang diikuti oleh <span class="font-semibold">{{ $student->name }}</span> Murid Kelas
            <span class="font-semibold">{{ $student->class }}</span> </h1>
        <div class="grid grid-cols-4 mt-4 gap-5">
            @foreach($lomba as $data)
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7 text-gray-500 mb-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                </svg>

                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">{{$data->lomba->judulLomba}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500">{{ Illuminate\Support\Str::limit($data->lomba->deskripsiLomba, 120) }}</p>
                <p class="inline-flex font-medium items-center text-blue-600">
                    {{ $data->hasil }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-lg">List lomba yang ada di sekolah</h1>
        <div class="grid grid-cols-4 mt-4 gap-5">
            @foreach($lombaAll as $data)
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7 text-gray-500 mb-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                </svg>

                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">{{$data->judulLomba}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500">{{ Illuminate\Support\Str::limit($data->deskripsiLomba, 120) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
