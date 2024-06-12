<x-app-layout>
<<<<<<< HEAD
    
</x-app-layout>
=======
    <h1><a class="text-[#4A5FCC]" href="{{ route('dashboard') }}">Dashboard</a> > Jadwal Konsultasi</h1>
    <hr class="border-2 shadow">

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-xl font-semibold">Jadwal Konsultasi untuk {{ auth()->user()->name }}</h1>
        <div class="relative overflow-x-auto mt-4">
            <table id="tableData" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Wali Murid
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Murid
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Topik
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($konsultasi as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data->waliMuridName }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->student->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->topik }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($data->tanggal)->format('j F Y') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
>>>>>>> origin/Damario
