<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('dashboard') }}">Dashboard</a> > Ekstrakurikuler</h1>
    <hr class="border-2 shadow">

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-xl font-semibold">List Ekstrakurikuler {{ auth()->user()->guru->tingkatan_sekolah }}</h1>
        <div class="mt-3">
            @if(count($ekstra) > 0)
            <div class="grid grid-cols-3 gap-5">
                @foreach($ekstra as $data)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-between">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            {{ Illuminate\Support\Str::limit($data->judulEkstra, 50) }}</h5>
                    </a>
                    <div>
                        <p>Tingkatan {{ $data->tingkatan }}</p>
                        <p class="text-sm text-gray-600">{{ $data->deskripsiEkstra }}</p>
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
                @endforeach
            </div>
            @else
            <p class="text-lg font-semibold text-center">Tidak ada Tugas</p>
            @endif
        </div>
    </div>
    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-xl font-semibold">List Ekstrakurikuler {{ auth()->user()->guru->tingkatan_sekolah }}</h1>
        <div class="mt-3">
            <div class="relative overflow-x-auto">
                <table id="tableData" class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Murid
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ekstrakurikuler
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($ekstraStudent) > 0)
                        @foreach($ekstraStudent as $data)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $data->student->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data->student->class }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->ekstrakurikuler->judulEkstra }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->nilai }}
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
