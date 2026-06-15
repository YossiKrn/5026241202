@extends('templatebt5')
@section('judul_halaman', 'Form Tambah Data')
@section('konten')

    <br>
    <a href="/penggajian" class="btn btn-secondary mb-3">Kembali</a>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form action="/penggajian/store" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gaji Pokok</label>
            <input type="text" name="gajipokok" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Potongan</label>
            <input type="text" name="potongan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data Baru</button>
    </form>
    @endsection
