<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penggajianDBController extends Controller
{
    //start FUNGSI MENAMPILKAN HALAMAN UTAMA (INDEX)
    public function index()
    {
        $data = DB::table('penggajian')->paginate(10);
        return view('EAS.penggajian', ['data' => $data]);
    }
    //end FUNGSI MENAMPILKAN HALAMAN UTAMA (INDEX)

    //start FUNGSI MENAMPILKAN FORMULIR TAMBAH DATA
    public function tambah()
    {
        return view('EAS.tambah');
    }
    //end FUNGSI MENAMPILKAN FORMULIR TAMBAH DATA

    //start FUNGSI MEMPROSES SIMPAN DATA BARU DAN VALIDASI PRIMARY KEY MANUAL
    public function store(Request $request)
    {
        // Proses pengecekan data kembar pada Primary Key manual sebelum di-insert
        $cek_data = DB::table('penggajian')->where('nip', $request->nip)->first();

        if ($cek_data) {
            // Jika data sudah ada, batalkan perintah dan kembali ke form bawa pesan error
            return redirect()->back()->with('error', 'Gagal! Kode/ID tersebut sudah terdaftar di sistem.');
        }

        // Jika lolos pengecekan (unik), proses insert dijalankan seperti biasa
        DB::table('penggajian')->insert([
            'nip' => $request->nip,
            'gajipokok'   => $request->gajipokok,
            'potongan'   => $request->potongan
        ]);

        return redirect('/penggajian')->with('success', 'Data berhasil ditambahkan!');
    }
    //end FUNGSI MEMPROSES SIMPAN DATA BARU DAN VALIDASI PRIMARY KEY MANUAL

    //start FUNGSI MEMPROSES UPDATE DATA
    public function update(Request $request)
    {
        DB::table('penggajian')->where('nip', $request->nip)->update([
            'gajipokok' => $request->gajipokok,
            'potongan' => $request->potongan
        ]);

        return redirect('/penggajian')->with('success', 'Data berhasil diupdate!');
    }
    //end FUNGSI MEMPROSES UPDATE DATA
}
