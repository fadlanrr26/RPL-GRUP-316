<x-app-layout>
    <h1 class="text-2xl font-semibold">Input Nilai Murid</h1>
    <div class="bg-white rounded-md shadow p-4 mt-5">
        Form input nilai murid
    </div>

    <form action="{{ route('storeNilai') }}" method="POST" class="bg-white rounded-md shadow p-4 mt-5">
        @csrf
        <div>
            <label for="studentId" class="block mb-2 text-sm font-medium text-gray-900">Select an
                option</label>
            <select id="studentId" name="studentId" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Pilih Nama Murid</option>
                @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }} Kelas {{ $student->class }}</option>
                @endforeach
            </select>
        </div>
<<<<<<< HEAD
=======
        <div class="flex items-center gap-x-10 mt-3">
            <div class="w-1/2">
                <label for="tahunAjaran" class="block mb-2 text-sm font-medium text-gray-900">Tahun Ajaran:</label>
                <select id="tahunAjaran" name="tahunAjaran" disabled required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">Pilih Tahun Ajaran</option>
                    <option value="2024/2025" selected>2024/2025</option>
                </select>
            </div>
            <div class="w-1/2">
                <label for="semester" class="block mb-2 text-sm font-medium text-gray-900">Semester:</label>
                <select id="semester" name="semester" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" selected>Pilih Semester</option>
                    <option value="1">Semester Ganjil</option>
                    <option value="2">Semester Genap</option>
                </select>
            </div>
        </div>
>>>>>>> origin/Damario
        <div class="mt-3">
            <label for="mataPelajaran" class="block mb-2 text-sm font-medium text-gray-900">Mata Pelajaran:</label>
            <select id="mataPelajaran" name="mataPelajaran" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Pilih Mata Pelajaran</option>
                @foreach($mataPelajaran as $data)
                <option value="{{ $data->mata_pelajaran }}">{{ $data->mata_pelajaran }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900">Nilai:</label>
            <input type="number" id="nilai" name="nilai" aria-describedby="helper-text-explanation" min="0" max="100"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="70" required />
        </div>
        <div class="mt-3">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Submit</button>
        </div>
    </form>

    <div class="bg-white rounded-md shadow p-4 mt-5">
<<<<<<< HEAD
        <h1 class="my-3 text-xl font-semibold">List Nilai Mahasiswa {{ auth()->user()->guru->tingkatan_sekolah }}</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
=======
        <h1 class="my-3 text-xl font-semibold">List Nilai Mahasiswa {{ auth()->user()->guru->tingkatan_sekolah }}
        </h1>
        <div class="flex items-center gap-x-3">
            <a href="{{ url('/input-nilai?filter=2024/2025') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Semua</a>
            <a href="{{ url('/input-nilai?filter=2024/2025-1') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">2024/2025
                Ganjil</a>
            <a href="{{ url('/input-nilai?filter=2024/2025-2') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">2024/2025
                Genap</a>
        </div>
        <div class="relative overflow-x-auto">
            <table id="tableData" class="w-full text-sm text-left rtl:text-right text-gray-500">
>>>>>>> origin/Damario
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Murid
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tingkatan
                        </th>
                        <th scope="col" class="px-6 py-3">
<<<<<<< HEAD
=======
                            Semester
                        </th>
                        <th scope="col" class="px-6 py-3">
>>>>>>> origin/Damario
                            Kelas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IPA
                        </th>
                        <th scope="col" class="px-6 py-3">
                            IPS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            MATEMATIKA
                        </th>
                        <th scope="col" class="px-6 py-3">
                            BAHASA INDONESIA
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SEJARAH
                        </th>
                        <th scope="col" class="px-6 py-3">
                            BAHASA INGGRIS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PENJAS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            BAHASA JEPANG
                        </th>
                        <th scope="col" class="px-6 py-3">
                            BIMBINGAN KONSELING
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($studentFormated as $data)
<<<<<<< HEAD
=======
                    @if($filter == '2024/2025')
>>>>>>> origin/Damario
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data['name'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['level'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['class'] }}
<<<<<<< HEAD
                        </td>
                        @foreach($data['nilaiMapel'] as $nilai)
=======
                        <td class="px-6 py-4">
                            Semester 1
                        </td>
                        </td>
                        @foreach($data['nilaiSemester1'] as $nilai)
>>>>>>> origin/Damario
                        <td class="px-6 py-4">
                            {{ $nilai }}
                        </td>
                        @endforeach
                    </tr>
<<<<<<< HEAD
=======
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data['name'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['level'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['class'] }}
                        <td class="px-6 py-4">
                            Semester 2
                        </td>
                        </td>
                        @foreach($data['nilaiSemester2'] as $nilai)
                        <td class="px-6 py-4">
                            {{ $nilai }}
                        </td>
                        @endforeach
                    </tr>
                    @elseif($filter == '2024/2025-1')
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data['name'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['level'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['class'] }}
                        <td class="px-6 py-4">
                            Semester 1
                        </td>
                        </td>
                        @foreach($data['nilaiSemester1'] as $nilai)
                        <td class="px-6 py-4">
                            {{ $nilai }}
                        </td>
                        @endforeach
                    </tr>
                    @elseif($filter == '2024/2025-2')
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data['name'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['level'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['class'] }}
                        <td class="px-6 py-4">
                            Semester 2
                        </td>
                        </td>
                        @foreach($data['nilaiSemester2'] as $nilai)
                        <td class="px-6 py-4">
                            {{ $nilai }}
                        </td>
                        @endforeach
                    </tr>
                    @endif
>>>>>>> origin/Damario
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
