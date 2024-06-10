<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > Rata-Rata Nilai</h1>
    <hr class="border-2 shadow">

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="my-3 text-xl font-semibold">Nilai {{ $student->name }}</h1>
        <div class="flex items-center gap-x-3">
            <a href="{{ url('/rata-rata-nilai?filter=2024/2025') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Semua</a>
            <a href="{{ url('/rata-rata-nilai?filter=2024/2025-1') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">2024/2025
                Ganjil</a>
            <a href="{{ url('/rata-rata-nilai?filter=2024/2025-2') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">2024/2025
                Genap</a>
        </div>
        <div class="relative overflow-x-auto">
            <table id="tableData" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Mata Pelajaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Semester
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if($filter == '2024/2025')
                    @foreach($nilai as $key => $value)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $key }}
                        </th>
                        <td class="px-6 py-4">
                            Semester 1
                        </td>
                        <td class="px-6 py-4">
                            {{ $value }}
                        </td>
                    </tr>
                    @endforeach
                    @foreach($nilai2 as $key => $value)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $key }}
                        </th>
                        <td class="px-6 py-4">
                            Semester 2
                        </td>
                        <td class="px-6 py-4">
                            {{ $value}}
                        </td>
                    </tr>
                    @endforeach
                    @elseif($filter == '2024/2025-1')
                    @foreach($nilai as $key => $value)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $key }}
                        </th>
                        <td class="px-6 py-4">
                            Semester 1
                        </td>
                        <td class="px-6 py-4">
                            {{ $value }}
                        </td>
                    </tr>
                    @endforeach
                    @elseif($filter == '2024/2025-2')
                    @foreach($nilai2 as $key => $value)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $key }}
                        </th>
                        <td class="px-6 py-4">
                            Semester 2
                        </td>
                        <td class="px-6 py-4">
                            {{ $value }}
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
