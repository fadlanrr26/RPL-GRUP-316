<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-24">
            <div class="grid grid-cols-2 gap-x-32 gap-y-8">
                @role('guru')
                <a href="{{ route('inputNilai') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/input.png') }}" alt="Photo">Input Nilai</a>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/consultation.png') }}" alt="Photo">Feedback Konsultasi</div>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/filekonsultasi.png') }}" alt="Photo">File Konsultasi</div>
                <a href="{{ route('ekstrakurikuler') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/ekstra.png') }}" alt="Photo">Ekstrakurikuler</a>
                @elserole('wali murid')
                <a href="{{ route('inputNilai') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/ratarata-nilai.png') }}" alt="Photo">Rata-rata Nilai</a>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/kehadiran.png') }}" alt="Photo">Kehadiran</div>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/lomba.png') }}" alt="Photo">Kegiatan Lomba</div>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/pemahaman-materi.png') }}" alt="Photo">Pemahaman Materi</div>
                @endrole    
            </div>
        </div>
    </div>
</x-app-layout>
