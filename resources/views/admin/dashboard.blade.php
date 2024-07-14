@extends('layouts.admin')
@section('title', 'Beranda Admin')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="box-shadow: 1px 2px 3px;">
            {{-- <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 mb-5">
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-5">
                    Olah Data
                </h3>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4 sm:mt-12 mt-5"> --}}
                <!-- Kategori: Pemrograman -->
                {{-- <a href="/course" class="block no-underline">
                    <div
                        class="p-4 bg-blue-500 border border-blue-600 rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-lg dark:hover:shadow-lg-light ml-3">
                        <div class="text-white text-center">
                            <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5-10 5z"></path>
                                <path d="M2 12l10 5 10-5"></path>
                                <path d="M2 17l10 5 10-5"></path>
                            </svg>
                            <h3 class="font-semibold text-xl mb-3">Mata Kuliah</h3>
                        </div>
                    </div>
                </a>
                <a href="/lecturer" class="block no-underline">
                    <!-- Kategori: Desain -->
                    <div
                        class="p-4 bg-green-500 border border-green-600 rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-lg dark:hover:shadow-lg-light me-3">
                        <div class="text-white text-center">
                            <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 15s-2 4-6 4-6-4-6-4"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                                <path d="M17 8s2-3 5-3"></path>
                                <path d="M6 15s2 4 6 4 6-4 6-4"></path>
                                <circle cx="12" cy="10" r="1"></circle>
                            </svg>
                            <h3 class="font-semibold text-xl mb-3">Dosen</h3>
                        </div>
                    </div>
                </a>
                <a href="/class" class="block no-underline">
                    <!-- Kategori: Statistik -->
                    <div
                        class="p-4 bg-purple-500 border border-purple-600 rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-lg dark:hover:shadow-lg-light ml-3 mb-5">
                        <div class="text-white text-center">
                            <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                            <h3 class="font-semibold text-xl mb-3">Kelas</h3>
                        </div>
                    </div>
                </a>
                <a href="/student" class="block no-underline">
                    <!-- Kategori: Lainnya -->
                    <div
                        class="p-4 bg-orange-500 border border-orange-600 rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-lg dark:hover:shadow-lg-light me-3 mb-5">
                        <div class="text-white text-center">
                            <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <line x1="12" y1="18" x2="12" y2="18"></line>
                                <line x1="12" y1="2" x2="12" y2="6"></line>
                                <line x1="4" y1="8" x2="20" y2="8"></line>
                                <line x1="4" y1="12" x2="20" y2="12"></line>
                                <line x1="4" y1="16" x2="20" y2="16"></line>
                            </svg>
                            <h3 class="font-semibold text-xl mb-3">Mahasiswa</h3>
                        </div>
                    </div>
                </a> --}}
            </div>
        </div>
    @endsection
