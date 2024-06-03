<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-24">
            <div class="grid grid-cols-2 gap-x-32 gap-y-8">
                <a href="{{ url('/rata-rata-nilai?filter=2024/2025') }}"
                    class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/ratarata-nilai.png') }}" alt="Photo">Rata-rata Nilai</a>
                <a href="{{ route('kehadiran') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/kehadiran.png') }}" alt="Photo">Kehadiran</a>
                <a href="{{ route('lomba') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/lomba.png') }}" alt="Photo">Kegiatan Lomba</a>
                <a href="{{ route('akademik') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/pemahaman-materi.png') }}" alt="Photo">Pemahaman Materi</a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-24 mt-10 flex items-center gap-x-10">
            <div class="w-full bg-white rounded-lg shadow p-4 md:p-6">
                <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center me-3">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 19">
                                <path
                                    d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                <path
                                    d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="leading-none text-2xl font-bold text-gray-900 pb-1">Rata-Rata Nilai Siswa
                                {{ $student->name }}</h5>
                            <p class="text-sm font-normal text-gray-500">Rata-Rata Nilai Siswa
                                {{ $student->name }}</p>
                        </div>
                    </div>
                </div>
                <div id="column-chart"></div>
            </div>
        </div>

         <div class="max-w-7xl mx-auto px-24 mt-10 flex items-center gap-x-10">
            <div class="w-full bg-white rounded-lg shadow p-4 md:p-6">
                <div class="flex justify-between pb-4 mb-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center me-3">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 19">
                                <path
                                    d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                <path
                                    d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="leading-none text-2xl font-bold text-gray-900 pb-1">Kegiatan Siswa {{ $student->name }}</h5>
                            <p class="text-sm font-normal text-gray-500">Kegiatan Siswa {{ $student->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-y-4">
                    <div class="flex">
                        <div class="w-1/3">Jumlah Kegiatan Lomba</div>
                        <div class="w-2/3">: {{ count($lombaStudent) }} kali</div>
                    </div>
                    <div class="flex">
                        <div class="w-1/3">Kegiatan Lomba</div>
                        <div class="w-2/3"><ul class="list-disc pl-5">
                            @foreach($lombaStudent as $data)
                            <li>{{ $data->lomba->judulLomba }} <span class="ml-4">Hasil: <span class="font-semibold">{{ $data->hasil }}</span></span></li>
                            @endforeach
                        </ul></div>
                    </div>
                    <div class="flex">
                        <div class="w-1/3">Jumlah Kegiatan Ekstrakurikuler</div>
                        <div class="w-2/3">: {{ count($ekstraStudent) }} Ekstrakurikuler</div>
                    </div>
                    <div class="flex">
                        <div class="w-1/3">Kegiatan Lomba</div>
                        <div class="w-2/3"><ul class="list-disc pl-5">
                            @foreach($ekstraStudent as $data)
                            <li>{{ $data->ekstrakurikuler->judulEkstra }} <span class="ml-4">Nilai: <span class="font-semibold">{{ $data->nilai }}</span></span></li>
                            @endforeach
                        </ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [{
                name: "Nilai Semester 1",
                color: "#1A56DB",
                data: <?= $nilaiJson ?>
            },
            {
                name: "Nilai Semester 2",
                color: "#FDBA8C",
                data: <?= $nilai2Json ?>
            }],
            chart: {
                type: "bar",
                height: "320px",
                fontFamily: "Inter, sans-serif",
                toolbar: {
                show: false,
                },
            },
            plotOptions: {
                bar: {
                horizontal: false,
                columnWidth: "70%",
                borderRadiusApplication: "end",
                borderRadius: 8,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                fontFamily: "Inter, sans-serif",
                },
            },
            states: {
                hover: {
                filter: {
                    type: "darken",
                    value: 1,
                },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                left: 2,
                right: 2,
                top: -14
                },
            },
            dataLabels: {
                enabled: true,
            },
            legend: {
                show: true,
            },
            xaxis: {
                floating: false,
                labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
                },
                axisBorder: {
                show: false,
                },
                axisTicks: {
                show: false,
                },
            },
            yaxis: {
                show: true,
            },
            fill: {
                opacity: 1,
            },
        }

        if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }
    </script>
</x-app-layout>
