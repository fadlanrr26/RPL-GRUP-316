<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > <a href="{{ route('administrasiDetail') }}"
            class="text-[#4A5FCC]">Administrasi</a> > <a href="{{ route('administrasiDetail') }}">Detail Pembayaran </a> > Mangkir</h1>
    <hr class="border-2 shadow">
    <div class="flex items-center mt-5">
        <a href="{{ route('administrasiDetail') }}" class="bg-[#1A4B83] py-1 px-3 text-white rounded-sm border ">Data Pembayaran</a>
        <a href="{{ route('mangkir') }}" class="bg-[#F5F5DC] py-1 px-3 rounded-sm border border-[#dedecf]">Data Mangkir Pembayaran</a>
    </div>

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tahun Ajaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Semester
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Batas Waktu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alasan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Denda
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($administrasiMangkir as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            2024/2025
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->semester }}
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ $data->totalTagihan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($data->batasWaktu)->format('j F Y') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->alasan ? $data->alasan : "-" }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->status }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>