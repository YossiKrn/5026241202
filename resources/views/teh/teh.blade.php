@extends('templatebt5')

@section('judul_halaman', 'Data Teh')

@section('konten')

    <br>

    <a href="/teh/tambah" class="btn btn-primary mb-3">Tambah Data Teh</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Teh</th>
            <th>Merk Teh</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>

        @foreach ($teh as $t)
            <tr>
                <td>{{ $t->kodeteh }}</td>
                <td>{{ $t->merkteh }}</td>
                <td>{{ $t->stockteh }}</td>
                <td>{{ $t->tersedia }}</td>
                <td>
                    <a href="/teh/edit/{{ $t->kodeteh }}" class="btn btn-warning">Edit</a>
                    <a href="/teh/hapus/{{ $t->kodeteh }}" class="btn btn-danger"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $teh->links() }}

@endsection
