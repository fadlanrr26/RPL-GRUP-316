<x-app-layout>
<<<<<<< HEAD
    
</x-app-layout>
=======
    <h1 class="text-2xl font-semibold">Input Materi</h1>
    <div class="bg-white rounded-md shadow p-4 mt-5">
        Administrasi Mahasiswa {{ auth()->user()->guru->tingkatan_sekolah }}
    </div>

    <div class="bg-white rounded-md shadow p-4 mt-5">


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
                            Tahun Ajaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Semester
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SPP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mangkir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Tagihan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Pembayaran
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $data)
                        @foreach($data->administrasi as $administrasi)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $data->name }}
                                </th>
                                <td class="px-6 py-4">
                                    Kelas {{ $data->class }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $administrasi->tahunAjaran }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $administrasi->semester }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp. {{ $administrasi->SPP }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $administrasi->mangkir ? $administrasi->mangkir : '-'}}
                                </td>
                                <td class="px-6 py-4">
                                    Rp. {{ $administrasi->totalTagihan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $administrasi->status }}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
>>>>>>> origin/Damario
