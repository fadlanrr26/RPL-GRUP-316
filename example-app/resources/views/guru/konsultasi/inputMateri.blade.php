<x-app-layout>
    <h1 class="text-2xl font-semibold">Input Materi</h1>
    <div class="bg-white rounded-md shadow p-4 mt-5">
        Form input Materi
    </div>

    <form action="{{ route('storeMateri') }}" method="POST" class="bg-white rounded-md shadow p-4 mt-5">
        @csrf
        <div>
            <label for="mataPelajaran" class="block mb-2 text-sm font-medium text-gray-900">Pilih Kelas:</label>
            <div class="flex">
                @if(auth()->user()->guru->tingkatan_sekolah == "SD")
                <div class="flex items-center me-4">
                    <input id="inline-radio" type="radio" value="I" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900">I
                        1</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-2-radio" type="radio" value="II" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900">II
                        2</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-checked-radio" type="radio" value="III" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-checked-radio" class="ms-2 text-sm font-medium text-gray-900">III</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-checked-radio" type="radio" value="IV" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-checked-radio" class="ms-2 text-sm font-medium text-gray-900">IV</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-checked-radio" type="radio" value="V" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-checked-radio" class="ms-2 text-sm font-medium text-gray-900">V</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-checked-radio" type="radio" value="VI" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-checked-radio" class="ms-2 text-sm font-medium text-gray-900">VI</label>
                </div>
                @elseif(auth()->user()->guru->tingkatan_sekolah == "SMP")
                <div class="flex items-center me-4">
                    <input id="inline-radio" type="radio" value="VII" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900">VII</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-2-radio" type="radio" value="VIII" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900">VIII</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-checked-radio" type="radio" value="IX" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-checked-radio" class="ms-2 text-sm font-medium text-gray-900">IX</label>
                </div>
                @elseif(auth()->user()->guru->tingkatan_sekolah == "SMA")
                <div class="flex items-center me-4">
                    <input id="inline-radio" type="radio" value="X" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900">X</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-2-radio" type="radio" value="XI" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900">XI</label>
                </div>
                <div class="flex items-center me-4">
                    <input id="inline-checked-radio" type="radio" value="XII" name="class" required
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="inline-checked-radio" class="ms-2 text-sm font-medium text-gray-900">XII</label>
                </div>
                @endif
            </div>
        </div>
        <div class="mt-3">
            <label for="mataPelajaran" class="block mb-2 text-sm font-medium text-gray-900">Mata Pelajaran:</label>
            <select id="mataPelajaran" name="mataPelajaran" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" selected>Pilih Mata Pelajaran</option>
                @foreach($mataPelajaran as $data)
                <option value="{{ $data->mata_pelajaran }}">{{ $data->mata_pelajaran }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul Materi:</label>
            <input id="judul" name="judul" type="text" required placeholder="Judul materi..."
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>
        <div class="mt-3">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Konten Materi:</label>
            <textarea id="deskripsi" rows="8" name="deskripsi" required
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Konten materi..."></textarea>
        </div>
        <div class="mt-3">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Submit</button>
        </div>
    </form>

    <div class="bg-white rounded-md shadow p-4 mt-5">
        @if(count($materi) > 0)
        <h1 class="mb-5 text-xl font-semibold">List Materi {{ auth()->user()->guru->tingkatan_sekolah }}</h1>
        <div class="grid grid-cols-3 gap-5">
            @foreach($materi as $data)
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col justify-between">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        {{ Illuminate\Support\Str::limit($data->judul, 50) }}</h5>
                </a>
                <div>
                    <span class="text-sm font-semibold text-gray-600">Kelas {{ $data->kelas }}</span>
                    <p class="text-sm text-gray-600">Mata Pelajaran <span class="font-semibold">{{ $data->mapel->mata_pelajaran }}</span></p>
                    <p class="mb-3 text-sm text-gray-700">{{ Illuminate\Support\Str::limit($data->deskripsi, 120) }}
                    </p>
                </div>
                <div class="flex items-center gap-x-3">
                    <button data-modal-target="editModal-{{ $data->id }}" data-modal-toggle="editModal-{{ $data->id }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                        Edit
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                    <button data-modal-target="deleteModal-{{ $data->id }}"
                        data-modal-toggle="deleteModal-{{ $data->id }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                        Delete
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="deleteModal-{{ $data->id }}" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="deleteModal-{{ $data->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah kamu yakin untuk menghapus materi
                                ini?</h3>
                            <form action="{{ route('deleteMateri', $data->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Yes, I'm sure
                                </button>
                                <button data-modal-hide="deleteModal-{{ $data->id }}" type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No,
                                    cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Edit modal -->
            <div id="editModal-{{ $data->id }}" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <form form action="{{ route('updateMateri', $data->id) }}" method="POST"
                        class="relative bg-white rounded-lg shadow">
                        @csrf
                        @method('patch')
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                {{ $data->judul }} Edit Form
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="editModal-{{ $data->id }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div>
                                <label for="mataPelajaran" class="block mb-2 text-sm font-medium text-gray-900">Pilih
                                    Kelas:</label>
                                <div class="flex">
                                    @if(auth()->user()->guru->tingkatan_sekolah == "SD")
                                    <div class="flex items-center me-4">
                                        <input id="inline-radio" type="radio" value="I" name="class" required
                                            {{ $data->kelas == "I" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900">I
                                            1</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-2-radio" type="radio" value="II" name="class" required
                                            {{ $data->kelas == "II" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900">II
                                            2</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-checked-radio" type="radio" value="III" name="class" required
                                            {{ $data->kelas == "III" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-checked-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">III</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-checked-radio" type="radio" value="IV" name="class" required
                                            {{ $data->kelas == "IV" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-checked-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">IV</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-checked-radio" type="radio" value="V" name="class" required
                                            {{ $data->kelas == "V" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-checked-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">V</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-checked-radio" type="radio" value="VI" name="class" required
                                            {{ $data->kelas == "VI" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-checked-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">VI</label>
                                    </div>
                                    @elseif(auth()->user()->guru->tingkatan_sekolah == "SMP")
                                    <div class="flex items-center me-4">
                                        <input id="inline-radio" type="radio" value="VII" name="class" required
                                            {{ $data->kelas == "VII" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">VII</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-2-radio" type="radio" value="VIII" name="class" required
                                            {{ $data->kelas == "VIII" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-2-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">VIII</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-checked-radio" type="radio" value="IX" name="class" required
                                            {{ $data->kelas == "IX" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-checked-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">IX</label>
                                    </div>
                                    @elseif(auth()->user()->guru->tingkatan_sekolah == "SMA")
                                    <div class="flex items-center me-4">
                                        <input id="inline-radio" type="radio" value="X" name="class" required
                                            {{ $data->kelas == "X" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">X</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-2-radio" type="radio" value="XI" name="class" required
                                            {{ $data->kelas == "XI" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-2-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">XI</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="inline-checked-radio" type="radio" value="XII" name="class" required
                                            {{ $data->kelas == "XII" ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-checked-radio"
                                            class="ms-2 text-sm font-medium text-gray-900">XII</label>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="mataPelajaran" class="block mb-2 text-sm font-medium text-gray-900">Mata
                                    Pelajaran:</label>
                                <select id="mataPelajaran" name="mataPelajaran" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" selected>Pilih Mata Pelajaran</option>
                                    @foreach($mataPelajaran as $mapel)
                                    <option value="{{ $mapel->mata_pelajaran }}"
                                        {{ $data->mapel->mata_pelajaran == $mapel->mata_pelajaran ? 'selected' : '' }}>
                                        {{ $mapel->mata_pelajaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul
                                    Materi:</label>
                                <input id="judul" name="judul" type="text" value="{{ $data->judul }}" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                            </div>
                            <div class="mt-3">
                                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Konten
                                    Materi:</label>
                                <textarea id="deskripsi" rows="8" name="deskripsi" required
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $data->deskripsi }}</textarea>
                            </div>
                    </form>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit</button>
                        <button data-modal-hide="editModal-{{ $data->id }}" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <h1 class="text-center text-xl font-medium">Belum ada Materi</h1>
    @endif
    </div>
</x-app-layout>
