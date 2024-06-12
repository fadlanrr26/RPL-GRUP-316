<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > Kehadiran</h1>
    <hr class="border-2 shadow">

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-lg">Absensi <span class="font-semibold">{{ $student->name }}</span> Murid Kelas <span
                class="font-semibold">{{ $student->class }}</span> </h1>
        <div class="relative overflow-x-auto mt-4">
            <table id="tableData" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kehadiran as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($data->tanggal)->format('j F Y') }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->izin ? $data->izin : "Hadir ✔" }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
