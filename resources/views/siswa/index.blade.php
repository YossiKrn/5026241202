@extends('templatebt5')

@section('judul_halaman', 'Data Siswa')

@section('konten')

    <br>

    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Data Siswa</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Opsi</th>
        </tr>

        @foreach ($siswa as $s)
            <tr>
                <td>{{ $s->NRP }}</td>
                <td>{{ $s->Nama }}</td>
                <td>{{ $s->Kelas }}</td>
                <td>{{ $s->TanggalLahir }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $s->NRP) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('siswa.destroy', $s->NRP) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
