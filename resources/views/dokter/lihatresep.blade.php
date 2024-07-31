@extends('layouts.dokter')
@section('title', 'Lihat Resep')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Lihat Resep
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="" method="post">
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
                        <input type="text" name="nama_pasien" id="nama_pasien" value="{{ $selesai->pasien->nama }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            readonly>
                    </div>
                    <div class="mb-4">
                        <label for="keluhan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan</label>
                        <input type="text" name="keluhan" id="keluhan" placeholder="Masukkan nama Anda..."
                            value="{{ $selesai->keluhan }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            autocomplete="off" readonly required>
                    </div>
                    <div>
                        <label for="diagnosa"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa:</label>
                        <input type="text" name="diagnosa" id="diagnosa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Diagnosa dokter..." value="{{ $selesai->diagnosa }}" required />
                    </div>
                    <div class="col-span-2">
                        <label for="resep_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resep
                            Obat:</label>
                        <input type="text" name="resep_obat" id="resep_obat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Resep obat..." value="{{ $selesai->resep->first()->resep_obat ?? '' }}" required />
                    </div>
                    <div>
                        <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan Resep:</label>
                        <textarea name="keterangan" id="keterangan" rows="3"  placeholder="Keterangan tambahan..." required
                            class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">{{ $selesai->resep->first()->keterangan ?? '' }}</textarea>
                    </div>
                    <button type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a
                            href="/selesai">Kembali</a></button>
                </form>
            </div>
        </div>
    </div>
@endsection
