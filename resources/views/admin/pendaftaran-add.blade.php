@extends('layouts.admin')
@section('title', 'Tambah Pendaftaran')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Pendaftaran
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="pendaftaran" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="id_pasien"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pasien</label>
                        <select name="id_pasien" id="id_pasien"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-75 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected disabled>Pilih Pasien</option>
                            @foreach ($pasienList as $pasien)
                                <option value="{{ $pasien->id_pasien }}">{{ $pasien->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="keluhan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan</label>
                        <input type="text" name="keluhan" id="keluhan" placeholder="Masukkan spesialis Anda..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required>
                    </div>

                    <div class="mb-4">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-75 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required>
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>Pilih Status</option>
                            <option value="pendaftaran">Pendaftaran</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="id_dokter"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dokter</label>
                        <select name="id_dokter" id="id_dokter"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-75 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected disabled>Pilih Dokter</option>
                            @foreach ($dokterList as $dokter)
                                <option value="{{ $dokter->id_dokter }}">{{ $dokter->nama . ' - ' . $dokter->spesialis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/pendaftaran">Kembali</a></button>
                    <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
