<x-app-layout>
    <h1><a class="text-[#4A5FCC]" href="{{ route('waliDashboard') }}">Dashboard</a> > <a class="text-[#4A5FCC]"
            href="#">Konsultasi</a> > Feedback</h1>
    <hr class="border-2 shadow">


    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-xl font-semibold mb-3">Feedback untuk guru {{ $level }}</h1>
        <form action="{{ route('storeFeedback') }}" method="POST">
            @csrf
            <div class="flex items-center gap-x-10">
                <div class="w-1/2">
                    <label for="judulFeedback" class="block mb-2 text-sm font-medium text-gray-900">Judul
                        Feedback</label>
                    <input type="text" id="judulFeedback" name="judulFeedback"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Judul Feedback" required />
                </div>
                <div class="w-1/2">
                    <label for="guruId" class="block mb-2 text-sm font-medium text-gray-900">Guru</label>
                    <select name="guruId" id="guruId" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Pilih Guru</option>
                        @foreach($gurus as $data)
                        <option value="{{ $data->id }}">{{ $data->user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-3">
                <label for="feedback" class="block mb-2 text-sm font-medium text-gray-900">Judul
                    Feedback</label>
                <textarea type="text" id="feedback" name="feedback"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Feedback" required></textarea>
            </div>
            <button class="w-full text-white py-2 bg-[#1A4B83] mt-4 rounded-md">Submit</button>
        </form>
    </div>

    <div class="bg-white rounded-md shadow p-4 mt-5">
        <h1 class="text-xl font-semibold mb-3">Riwayat Feedback</h1>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Guru
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Feedback
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Feedback
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedback as $key => $value)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $key + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $value->namaGuru }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->judulFeedback }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->feedback }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-app-layout>
