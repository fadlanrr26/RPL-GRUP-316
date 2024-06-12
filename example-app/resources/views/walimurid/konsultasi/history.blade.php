<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > <a class="text-[#4A5FCC]"
            href="#">Konsultasi</a> > Riwayat Konsultasi</h1>
    <hr class="border-2 shadow">

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1>Riwayat Konsultasi Anda</h1>
        <div class="relative overflow-x-auto">
            <table id="tableData" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama Guru
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama Murid
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Topik
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($konsultasis as $key => $value)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $key+1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $value->guru }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->student->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->topik }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($value->date)->format('j F Y') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
