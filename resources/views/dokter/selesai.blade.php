@extends('layouts.dokter')
@section('title', 'Selesai')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Selesai
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
                    @foreach ($selesaiList as $data)
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
                                <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/lihatresep/{{ $data->id_rekam }}">Lihat Resep</a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

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
