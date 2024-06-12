<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > Akademik</h1>
    <hr class="border-2 shadow">

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-2xl font-semibold">List Materi Kelas {{ $student->class }}</h1>
        <div class="mt-3">
            @if(count($materi) > 0)
            <div class="grid grid-cols-3 gap-5">
                @foreach($materi as $data)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            {{ Illuminate\Support\Str::limit($data->judul, 50) }}</h5>
                    </a>
                    <div>
                        <span class="text-sm font-semibold text-gray-600">Kelas {{ $data->kelas }}</span>
                        <p class="text-sm text-gray-600">Mata Pelajaran <span
                                class="font-semibold">{{ $data->mapel->mata_pelajaran }}</span></p>
                        <p class="mb-3 text-sm text-gray-700">{{ Illuminate\Support\Str::limit($data->deskripsi, 120) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <button data-modal-target="detailMateriModal-{{ $data->id }}"
                            data-modal-toggle="detailMateriModal-{{ $data->id }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read More
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Materi modal -->
                <div id="detailMateriModal-{{ $data->id }}" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    {{ $data->judul }}
                                </h3>
                                <span class="text-sm font-semibold text-gray-600 ml-3">Kelas {{ $data->kelas }}</span>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-hide="detailMateriModal-{{ $data->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-gray-500">
                                    {{ $data->deskripsi }}
                                </p>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                <button data-modal-hide="detailMateriModal-{{ $data->id }}" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-lg font-semibold text-center">Tidak ada Materi</p>
            @endif
        </div>
    </div>
    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-2xl font-semibold">List Tugas Kelas {{ $student->class }}</h1>
        <div class="mt-3">
            @if(count($tugas) > 0)
            <div class="grid grid-cols-4 gap-5">
                @foreach($tugas as $data)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            {{ Illuminate\Support\Str::limit($data->judul, 50) }}</h5>
                    </a>
                    <div>
                        <span class="text-sm font-semibold text-gray-600">Kelas {{ $data->kelas }}</span>
                        <p class="text-sm text-gray-600">Mata Pelajaran <span
                                class="font-semibold">{{ $data->mapel->mata_pelajaran }}</span></p>
                        <p class="mb-3 font-normal text-gray-700">{{ Illuminate\Support\Str::limit($data->tugas, 120) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <button data-modal-target="detailTugasModal-{{ $data->id }}"
                            data-modal-toggle="detailTugasModal-{{ $data->id }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read More
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="detailTugasModal-{{ $data->id }}" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    {{ $data->judul }}
                                </h3>
                                <span class="text-sm font-semibold text-gray-600">Kelas {{ $data->kelas }}</span>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-hide="detailTugasModal-{{ $data->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-gray-500">
                                    {{$data->tugas}}
                                </p>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                <button data-modal-hide="detailTugasModal-{{ $data->id }}" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-lg font-semibold text-center">Tidak ada Tugas</p>
            @endif
        </div>
    </div>
    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-2xl font-semibold">Ekstrakurikuler yang diikuti {{ $student->name }}</h1>
        <div class="mt-3">
            @if(count($ekstra) > 0)
            <div class="grid grid-cols-3 gap-5">
                @foreach($ekstra as $data)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            {{ Illuminate\Support\Str::limit($data->ekstrakurikuler->judulEkstra, 50) }}</h5>
                    </a>
                    <div>
                        <p>Tingkatan {{ $data->ekstrakurikuler->tingkatan }}</p>
                        <p class="text-sm text-gray-600">{{ $data->ekstrakurikuler->deskripsiEkstra }}</p>
                        <p class="mb-3 font-normal text-gray-700">{{ Illuminate\Support\Str::limit($data->tugas, 120) }}
                        </p>
                        <p class="mb-3 font-normal text-gray-700">Nilai: <span class="font-semibold">{{ $data->nilai }}</span></p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-lg font-semibold text-center">Tidak ada Tugas</p>
            @endif
        </div>
    </div>
</x-app-layout>
