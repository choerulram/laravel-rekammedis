@extends('layouts.dokter')
@section('title', 'Pemeriksaan')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Pemeriksaan
                </h3>
            </div>
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for items">
                </div>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                @if (Session::has('status'))
                    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        {{ Session::get('message') }}
                    </div>
                @endif

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No Kartu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pasien
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keluhan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Dokter
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemeriksaanList as $data)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->pasien->no_kartu }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->pasien->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->keluhan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->dokter->nama . ' - ' . $data->dokter->spesialis }}
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/pemeriksaan-edit/{{ $data->id_rekam }}">Edit</a></button>
                                {{-- <button data-id="{{ $data->id }}" data-pasien="{{ $data->pasien->nama }}"
                                    data-keluhan="{{ $data->keluhan }}" data-modal-target="authentication-modal"
                                    data-modal-toggle="authentication-modal"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    Periksa
                                </button> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- modal periksa --}}
    {{-- <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Periksa Pasien
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5">
                    <form class="space-y-4 grid grid-cols-1 md:grid-cols-2 gap-4" action="/pemeriksaan-periksa/{{ $pemeriksaanList->id_rekam }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="pasien_nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pasien:</label>
                            <input type="text" name="pasien_nama" id="pasien_nama" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                            <label for="keluhan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan:</label>
                            <input type="text" name="keluhan" id="keluhan" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                        </div>
                        <div>
                            <label for="diagnosa"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diagnosa:</label>
                            <input type="text" name="diagnosa" id="diagnosa"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Diagnosa dokter..." required />
                        </div>
                        <div>
                            <label for="keterangan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan:</label>
                            <input type="text" name="keterangan" id="keterangan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Keterangan tambahan..." required />
                        </div>
                        <div class="col-span-2 md:col-span-1 md:col-start-2">
                            <label for="id_obat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Obat</label>
                            <div class="relative">
                                <select name="id_obat[]" id="id_obat" multiple
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white no-arrow"
                                    required>
                                    @foreach ($obatList as $obat)
                                        <option value="{{ $obat->nama }}">{{ $obat->nama }}</option>
                                    @endforeach
                                </select>
                                <button type="button" id="set-resep-obat"
                                    class="absolute inset-y-0 right-0 flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-r-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-500">
                                    Pilih Obat
                                </button>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="resep_obat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resep Obat:</label>
                            <input type="text" name="resep_obat" id="resep_obat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Resep obat..." required />
                        </div>
                        <div class="col-span-2">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-500">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const periksaButtons = document.querySelectorAll('button[data-modal-toggle="authentication-modal"]');

            periksaButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const pasienNama = this.getAttribute('data-pasien');
                    const keluhan = this.getAttribute('data-keluhan');

                    // Set value to modal input fields
                    document.getElementById('pasien_nama').value = pasienNama;
                    document.getElementById('keluhan').value = keluhan;
                });
            });
        });

        document.getElementById('set-resep-obat').addEventListener('click', function() {
            var obatSelect = document.getElementById('id_obat');
            var selectedObats = Array.from(obatSelect.selectedOptions).map(option => option.text).join(', ');
            document.getElementById('resep_obat').value = selectedObats;
        });
    </script>
@endsection
