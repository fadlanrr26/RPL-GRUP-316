<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > <a class="text-[#4A5FCC]"
            href="#">Konsultasi</a> > Daftar Konsultasi</h1>
    <hr class="border-2 shadow">

    <div class="mt-10">
        <div class="text-center">
            <h1 class="text-3xl font-semibold">Daftar Penjadwalan Konsultasi</h1>
            <p class="mt-2">Silahkan isi lengkap form dibawah ini!</p>
        </div>
        <form action="{{ route('storeKonsultasi') }}" method="post" class="mt-10">
            @csrf
            <input type="hidden" name="guruId" value="{{ $guruId }}" />
            <div class="flex items-center justify-between gap-x-20">
                <div class="w-1/2">
                    <label for="waliMuridId" class="block mb-2 text-sm font-medium text-gray-900">Nama Wali
                        Murid*</label>
                    <input type="hidden" name="waliMuridId" value="{{ auth()->user()->walimurid->id }}">
                    <input type="text" id="waliMuridId" value="{{ auth()->user()->name }}" disabled
                        class="disabled bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="John" required />
                </div>
                <div class="w-1/2">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                        Konsultasi*</label>
                    <input type="date" id="date" name="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Doe" required />
                </div>
            </div>
            <div class="flex items-center justify-between gap-x-20 mt-10">
                <div class="w-1/2">
                    <label for="studentId" class="block mb-2 text-sm font-medium text-gray-900">Nama Murid*</label>
                    <input type="hidden" name="studentId" value="{{ $student->id }}">
                    <input type="text" id="studentId" value="{{ $student->name }}" disabled
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="John" required />
                </div>
                <div class="w-1/2">
                    <label for="topik" class="block mb-2 text-sm font-medium text-gray-900">Topik
                        Konsultasi*</label>
                    <input type="text" id="topik" name="topik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Topik" required />
                </div>
            </div>
            <div class="flex items-center justify-between gap-x-20 mt-10">
                <div class="w-1/2">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Kelas Murid*</label>
                    <input type="text" id="first_name" value="{{ $student->class }}" disabled
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="John" required />
                </div>
                <div class="w-1/2">
                 </div>
            </div>
            <button type="submit" class="w-full bg-[#FCC43E] py-2 mt-8 rounded-md">Daftar</button>
        </form>
</x-app-layout>
