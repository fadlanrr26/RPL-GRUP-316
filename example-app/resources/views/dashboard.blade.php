<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-24">
            <div class="grid grid-cols-2 gap-x-32 gap-y-8">
                <a href="{{ route('inputNilai') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/input.png') }}" alt="Photo">Input Nilai</a>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/consultation.png') }}" alt="Photo">Feedback Konsultasi</div>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/filekonsultasi.png') }}" alt="Photo">File Konsultasi</div>
                <div class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img src="{{ asset('assets/images/ekstra.png') }}" alt="Photo">Ekstrakurikuler</div>
            </div>
        </div>
    </div>
</x-app-layout>
