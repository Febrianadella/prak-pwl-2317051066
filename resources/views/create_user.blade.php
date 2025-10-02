@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center min-vh-100 bg-page">
    <div class="col-md-6 col-lg-5">
        <div class="card-custom shadow-lg p-4 rounded-4 bg-white">
            <!-- Judul Form -->
            <h1 class="text-center mb-3 fw-bold title-gradient">🚀 Registrasi Praktikum Web</h1>
            <p class="text-center mb-4 text-muted">Isi data mahasiswa untuk daftar ✨</p>

            <!-- Form -->
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">👤 Nama Lengkap</label>
                    <input type="text" class="form-control input-custom" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>

                <!-- NPM -->
                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold">🆔 NPM</label>
                    <input type="text" class="form-control input-custom" id="npm" name="npm" placeholder="Masukkan NPM" required>
                </div>

                <!-- Kelas -->
                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold">🏫 Kelas</label>
                    <select id="kelas_id" name="kelas_id" class="form-select input-custom" required>
                        <option value="">-- Pilih Kelas --</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tombol -->
                <button type="submit" class="btn btn-gradient w-100 py-2">✨ Simpan Data</button>
            </form>
        </div>
    </div>
</div>

<!-- CSS Khusus -->
<style>
/* Background halaman */
.bg-page {
    background: linear-gradient(135deg, #74ebd5, #ACB6E5); /* gradasi lembut */
    background-attachment: fixed;
}

/* Judul gradient */
.title-gradient {
    background: linear-gradient(90deg, #5bc0de, #007bff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Input style */
.input-custom {
    border-radius: 50px;
    padding: 10px 15px;
    border: 1px solid #5bc0de;
    transition: 0.3s;
}
.input-custom:focus {
    border-color: #31b0d5;
    box-shadow: 0 0 8px rgba(91,192,222,0.4);
}

/* Tombol gradient */
.btn-gradient {
    background: linear-gradient(135deg, #5bc0de, #007bff);
    border: none;
    color: #fff;
    font-weight: 600;
    letter-spacing: 0.5px;
    border-radius: 50px;
    transition: 0.3s;
}
.btn-gradient:hover {
    background: linear-gradient(135deg, #31b0d5, #0056b3);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
}
</style>
@endsection
