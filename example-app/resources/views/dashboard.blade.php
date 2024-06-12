<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-24">
            <div class="grid grid-cols-2 gap-x-32 gap-y-8">
<<<<<<< HEAD
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
=======
                <a href="{{ url('/input-nilai?filter=2024/2025') }}"
                    class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/input.png') }}" alt="Photo">Input Nilai</a>
                <a href="{{ route('feedbackKonsultasi') }}"class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/consultation.png') }}" alt="Photo">Feedback Konsultasi</a>
                <a href="{{ route('jadwalKonsultasi') }}" class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/filekonsultasi.png') }}" alt="Photo">File Konsultasi</a>
                <a href="{{ route('ekstrakurikuler') }}"
                    class="flex items-center gap-x-5 bg-[#ADD8E6] px-20 py-5 text-xl"><img
                        src="{{ asset('assets/images/ekstra.png') }}" alt="Photo">Ekstrakurikuler</a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-24 mt-10 flex items-center gap-x-10">

        
        <div class="w-full bg-white rounded-lg shadow p-4 md:p-6">
            <div class="flex justify-between mb-5">
                <div class="grid gap-4 grid-cols-2">
                    <div>
                        <p class="text-gray-900 text-2xl leading-none font-bold">Kunjungan Konsultasi</p>
                    </div>
                </div>
            </div>
            <div id="line-chart"></div>
            <div class="grid grid-cols-1 items-center border-gray-200 border-t justify-between mt-2.5">
                <div class="pt-5">
                    <a href="#"
                        class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center">
                        <svg class="w-3.5 h-3.5 text-white me-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                            <path
                                d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                        </svg>
                        View full report
                    </a>
                </div>
            </div>
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
                                {{ auth()->user()->guru->tingkatan_sekolah }}</h5>
                            <p class="text-sm font-normal text-gray-500">Rata-Rata Nilai Siswa
                                {{ auth()->user()->guru->tingkatan_sekolah }}</p>
                        </div>
                    </div>
                </div>
                <div id="column-chart"></div>
>>>>>>> origin/Damario
            </div>
        </div>
    </div>
    @if(auth()->user()->guru->tingkatan_sekolah == "SMA")
    <script>
        var kelasXJson = <?php echo $kelasX; ?>;
        var kelasXIJson = <?php echo $kelasXI; ?>;
        var kelasXIIJson = <?php echo $kelasXII; ?>;
        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [{
                name: "Nilai Semester 1",
                color: "#1A56DB",
                data: <?= $semester1Json ?>
            },
            {
                name: "Nilai Semester 2",
                color: "#FDBA8C",
                data: <?= $semester2Json ?>
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

        const options2 = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "line",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 3,
            },
            grid: {
                show: true,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -26
                },
            },
            series: [{
                    name: "Kelas X",
                    data: kelasXJson,
                    color: "#FCC43E",
                },
                {
                    name: "Kelas XI",
                    data: kelasXIJson,
                    color: "#FF92AE",
                },
                {
                    name: "Kelas XII",
                    data: kelasXIIJson,
                    color: "#06B27F",
                },
            ],
            legend: {
                show: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500'
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
                show: false,
            },
        }

        if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }
        if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("line-chart"), options2);
            chart.render();
        }
    </script>
    @elseif(auth()->user()->guru->tingkatan_sekolah == "SMP")
     <script>
        var kelasVIIJson = <?php echo $kelasVII; ?>;
        var kelasVIIIJson = <?php echo $kelasVIII; ?>;
        var kelasIXJson = <?php echo $kelasIX; ?>;
        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [{
                name: "Nilai Semester 1",
                color: "#1A56DB",
                data: <?= $semester1Json ?>
            },
            {
                name: "Nilai Semester 2",
                color: "#FDBA8C",
                data: <?= $semester2Json ?>
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
        const options2 = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "line",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 3,
            },
            grid: {
                show: true,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -26
                },
            },
            series: [{
                    name: "Kelas VII",
                    data: kelasVIIJson,
                    color: "#FCC43E",
                },
                {
                    name: "Kelas VIII",
                    data: kelasVIIIJson,
                    color: "#FF92AE",
                },
                {
                    name: "Kelas IX",
                    data: kelasIXJson,
                    color: "#06B27F",
                },
            ],
            legend: {
                show: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500'
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
                show: false,
            },
        }

        if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }

        if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("line-chart"), options2);
            chart.render();
        }
    </script>
    @elseif(auth()->user()->guru->tingkatan_sekolah == "SD")
    <script>
        var kelasIJson = <?php echo $kelasI; ?>;
        var kelasIIJson = <?php echo $kelasII; ?>;
        var kelasIIIJson = <?php echo $kelasIII; ?>;
        var kelasIVJson = <?php echo $kelasIV; ?>;
        var kelasVJson = <?php echo $kelasV; ?>;
        var kelasVIJson = <?php echo $kelasVI; ?>;

        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [{
                name: "Nilai Semester 1",
                color: "#1A56DB",
                data: <?= $semester1Json ?>
            },
            {
                name: "Nilai Semester 2",
                color: "#FDBA8C",
                data: <?= $semester2Json ?>
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

        const options2 = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "line",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 3,
            },
            grid: {
                show: true,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -26
                },
            },
            series: [{
                    name: "Kelas I",
                    data: kelasIJson,
                    color: "#FCC43E",
                },
                {
                    name: "Kelas II",
                    data: kelasIIJson,
                    color: "#FF92AE",
                },
                {
                    name: "Kelas III",
                    data: kelasIIIJson,
                    color: "#06B27F",
                },
                {
                    name: "Kelas IV",
                    data: kelasIVJson,
                    color: "#FFC55A",
                },
                {
                    name: "Kelas V",
                    data: kelasVJson,
                    color: "#00215E",
                },
                {
                    name: "Kelas VI",
                    data: kelasVIJson,
                    color: "#2C4E80",
                },
            ],
            legend: {
                show: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500'
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
                show: false,
            },
        }

        if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }
        if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("line-chart"), options2);
            chart.render();
        }
    </script>
    @endif
</x-app-layout>
