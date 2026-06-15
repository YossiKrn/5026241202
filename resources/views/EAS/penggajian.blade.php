@extends('templatebt5')
@section('judul_halaman', 'Halaman Utama')
@section('konten')

    <br>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Kode Soal penggajian</h1>
        </div>
    </div>
    <div class="d-flex justify-content-between mb-3">
        <a href="/penggajian/tambah" class="btn btn-primary">Tambah Data</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NIP</th>
            <th>Gaji Pokok</th>
            <th>Potongan</th>
            <th>Gaji Bersih</th>
            <th>Persentase Potongan</th>
        </tr>

        @foreach ($data as $d)
            <tr>
                <td>{{ $d->nip }}</td>
                <td>{{ $d->gajipokok }}</td>
                <td>{{ $d->potongan }}</td>
                <td>{{ ($d->gajipokok - $d->potongan) ? $d->gajibersih : '' }}</td>
                <td>{{ (($d->gajipokok - $d->potongan) / $d->gajipokok * 100) ? $d->persentase_potongan : '' }}%</td>
            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection
