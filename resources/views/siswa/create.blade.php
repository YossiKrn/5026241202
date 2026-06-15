@extends('templatebt5')
@section('judul_halaman', 'Tambah Data Siswa')
@section('konten')

    <br>
    <a href="/siswa" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Siswa
        </div>

        <div class="card-body">
            <form action="/siswa/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" id="Nama" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="Kelas" id="Kelas" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="TanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="TanggalLahir" id="TanggalLahir" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
