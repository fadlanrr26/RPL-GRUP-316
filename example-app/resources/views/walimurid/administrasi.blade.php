<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > <a href="#"
            class="text-[#4A5FCC]">Administrasi</a>> Detail Pembayaran</h1>
    <hr class="border-2 shadow">
    <div class="flex items-center mt-5">
        <a href="{{ route('administrasiDetail') }}" class="bg-[#1A4B83] py-1 px-3 text-white rounded-sm border ">Data
            Pembayaran</a>
        <a href="{{ route('mangkir') }}" class="bg-[#F5F5DC] py-1 px-3 rounded-sm border border-[#dedecf]">Data Mangkir
            Pembayaran</a>
    </div>
    <div class="bg-white rounded-md shadow p-4 mt-5">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">Data Murid</h1>
            <button data-modal-target="tataCaraPembayaranModal" data-modal-toggle="tataCaraPembayaranModal"
                class="py-2 px-5 bg-[#FCC43E] rounded-md">Tata Cara Pembayaran</button>
        </div>
        <div class="mt-3 border-2 p-3 border-black rounded-md">
            <div class="flex items-center">
                <div class="w-1/3">NISN</div>
                <div>: {{ $student->NISN }}</div>
            </div>
            <div class="flex items-center">
                <div class="w-1/3">Nama</div>
                <div>: {{ $student->name }}</div>
            </div>
            <div class="flex items-center">
                <div class="w-1/3">Kelas</div>
                <div>: {{ $student->class }}</div>
            </div>
            <div class="flex items-center">
                <div class="w-1/3">Angkatan</div>
                <div>: 2024/2025</div>
            </div>
            <div class="flex items-center">
                <div class="w-1/3">Tahun Ajaran</div>
                <div>: 2024/2025 - Ganjil</div>
            </div>
        </div>
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
                    @foreach($administrasi as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            2024/2025
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->semester }}
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ $data->SPP }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->mangkir ? "Rp. $data->mangkir" : "Rp. 0" }}
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ $data->totalTagihan }}
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

    <!-- Main modal -->
    <div id="tataCaraPembayaranModal" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex justify-between items-center">
                        <h1 class="font-blackHanSansRegular text-2xl text-[#1A4B83]">EduTrack</h1>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="tataCaraPembayaranModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <p class="text-lg font-medium">Tata Cara Pembayaran SPP Online</p>
                    <div class="border-2 border-[#FCC43E] p-4 flex flex-col gap-y-3">
                        <div class="flex items-center justify-between gap-10">
                            <div class="w-1/3">
                                <button class="bg-[#1A4B83] text-white px-2 py-2 w-full">Bank</button>
                            </div>
                            <div class="w-2/3 flex items-center gap-x-2">
                                <button class="bg-[#F5F5DC] font-medium w-1/3 py-2">BNI</button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                                <button class="bg-[#F5F5DC] font-medium w-1/3 py-2">BCA</button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                                <button class="bg-[#F5F5DC] font-medium w-1/3 py-2">Mandiri</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-10">
                            <div class="w-1/3">
                                <button class="bg-[#1A4B83] text-white px-2 py-2 w-full">Menu</button>
                            </div>
                            <div class="w-2/3 flex items-center gap-x-2">
                                <button class="bg-[#F5F5DC] font-medium px-2 py-2">Transfer Antar Bank</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-10">
                            <div class="w-1/3">
                                <button class="bg-[#1A4B83] text-white px-2 w-full py-2">Nomor Tagihan</button>
                            </div>
                            <div class="w-2/3 flex items-center gap-x-2">
                                <button class="bg-[#F5F5DC] font-medium w-1/3 py-2">5+NISN Murid</button>
                            </div>
                        </div>
                        <p class="mt-3 font-medium text-sm">*Untuk pembayaran SPP dapat dilakukan secara langsung ke Tata Usaha Sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
