@extends('layouts.admin')
@section('title', 'Edit Data Pendaftaran')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Data Pendaftaran
                </h3>
            </div>
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="/pendaftaran/{{ $pendaftaranList->id_rekam }}" method="post">
                    @csrf
                    @method('PUT')
                    @if (session('error'))
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Error!</span> {{ session('error') }}
                            </div>
                        </div>
                    @endif
                    <div class="mb-4">
                        <label for="id_pasien"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pasien</label>
                        <select name="id_pasien" id="id_pasien"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected disabled>Pilih Pasien</option>
                            @foreach ($pasienList as $pasien)
                                <option value="{{ $pasien->id_pasien }}" {{ $pendaftaranList->id_pasien == $pasien->id_pasien ? 'selected' : '' }}>
                                    {{ $pasien->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="keluhan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan</label>
                        <input type="text" name="keluhan" id="keluhan" placeholder="Masukkan nama Anda..." value="{{$pendaftaranList->keluhan}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required>
                    </div>
                    <div class="mb-4">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" value="{{ date('Y-m-d') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required readonly>
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <input type="text" name="status" id="status" placeholder="Masukkan umur Anda..." value="{{$pendaftaranList->status}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required readonly>
                    </div>
                    <div class="mb-4">
                        <label for="id_dokter"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dokter</label>
                        <select name="id_dokter" id="id_dokter"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option selected disabled>Pilih Dokter</option>
                            @foreach ($dokterList as $dokter)
                                <option value="{{ $dokter->id_dokter }}" {{ $pendaftaranList->id_dokter == $dokter->id_dokter ? 'selected' : '' }}>
                                    {{ $dokter->nama . ' - ' . $dokter->spesialis }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/pendaftaran">Kembali</a></button>
                    <button type="submit" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
