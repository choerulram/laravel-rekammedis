@extends('layouts.dokter')
@section('title', 'Edit Data Pemeriksaan')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Data Pemeriksaan
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="/pemeriksaan/{{ $pemeriksaanList->id_rekam }}" method="post">
                    @csrf
                    @method('PUT')
                    @if (session('error'))
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Error!</span> {{ session('error') }}
                            </div>
                        </div>
                    @endif
                    <div class="mb-4">
                        <label for="id_pasien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" value="{{ $selectedPasien->nama }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            readonly>
                    </div>
                    <div class="mb-4">
                        <label for="keluhan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan</label>
                        <input type="text" name="keluhan" id="keluhan" placeholder="Masukkan nama Anda..."
                            value="{{ $pemeriksaanList->keluhan }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            autocomplete="off" readonly required>
                    </div>
                    <div>
                        <label for="diagnosa"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa:</label>
                        <input type="text" name="diagnosa" id="diagnosa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Diagnosa dokter..." required />
                    </div>
                    <div class="col-span-2 md:col-span-1 md:col-start-2">
                        <label for="id_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            Obat:</label>
                        <div class="relative">
                            <select multiple id="id_obat" name="id_obat[]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white no-arrow"
                                required>
                                @foreach ($obatList as $obat)
                                    <option value="{{ $obat->id_obat }}">{{ $obat->nama }}</option>
                                @endforeach
                            </select>
                            <button type="button" id="add-obat-button"
                                class="absolute inset-y-0 right-0 flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-r-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-500">
                                Pilih Obat
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="resep_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resep
                            Obat:</label>
                        <input type="text" name="resep_obat[]" id="resep_obat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Resep obat..." required />
                    </div>
                    <div>
                        <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan Resep:</label>
                        <textarea name="keterangan[]" id="keterangan" rows="3" placeholder="Keterangan tambahan..." required
                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">{{ $pemeriksaanList->resep->first()->keterangan ?? '' }}</textarea>
                    </div>
                    <button type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a
                            href="/pemeriksaan">Kembali</a></button>
                    <button type="submit"
                        class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-obat-button').addEventListener('click', function() {
            var obatSelect = document.getElementById('id_obat');
            var selectedObats = Array.from(obatSelect.selectedOptions).map(option => option.text).join(', ');
            var resepObatTextarea = document.getElementById('resep_obat');
            resepObatTextarea.value += selectedObats + "\n";
        });
    </script>
@endsection
