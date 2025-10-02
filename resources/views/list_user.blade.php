@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-200 via-purple-200 to-blue-100 py-10">
    <div class="w-full max-w-5xl mx-auto">
        
        <!-- Judul -->
        <h1 class="text-center text-3xl font-extrabold mb-6 bg-gradient-to-r from-indigo-500 via-blue-500 to-pink-500 text-transparent bg-clip-text drop-shadow-md">
            📋 Daftar Mahasiswa Ilmu Komputer
        </h1>

        <!-- Tombol Tambah User -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('user.create') }}" 
               class="px-5 py-2 rounded-lg text-white font-medium shadow-md transition-transform transform hover:scale-105"
               style="background: linear-gradient(135deg, #00b7ef, #007bff); text-decoration:none;">
               ➕ Tambah User
            </a>
        </div>

        <!-- Card Tabel -->
        <div class="bg-white rounded-xl shadow-lg border border-blue-200 overflow-hidden">
            @include('component/user_table', ['users' => $users])
        </div>
    </div>
</div>
@endsection
