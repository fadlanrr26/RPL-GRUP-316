<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > <a class="text-[#4A5FCC]"
            href="#">Konsultasi</a> > Daftar Konsultasi</h1>
    <hr class="border-2 shadow">
    <div class="mt-5">
        <a href="{{ route('riwayatKonsultasi') }}" class="bg-[#1A4B83] px-4 py-2 rounded-md text-white">Riwayat Konsultasi</a>
    </div>

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1>List Guru {{ $level }}</h1>
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
                            NIP
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gurus as $key => $value)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $key+1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $value->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->nip }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('formKonsultasi', $value->id) }}" class="text-white px-3 py-1 bg-[#1A4B83]">Daftar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
