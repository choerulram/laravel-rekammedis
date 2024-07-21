@extends('layouts.admin')
@section('title', 'Hapus Mahasiswa')

@section('content')
<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="mt-5 mb-5">
            <h1 class="ml-3">Apakah Anda yakin ingin menghapus data: {{$dokter->nama}} ({{$dokter->nim}})</h1>
            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2 ml-3 mt-3">
                <a href="/student">Batal</a>
            </button>
            <form style="display: inline-block" action="/datadokter-destroy/{{$dokter->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2 ">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
