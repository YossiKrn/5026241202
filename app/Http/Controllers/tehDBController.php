<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tehDBController extends Controller
{
    public function teh()
    {
        // mengambil data dari table teh dengan pagination
        $teh = DB::table('teh')->paginate(5);

        // mengirim data teh ke view
        return view('teh.teh', ['teh' => $teh]);
    }

    // method untuk menampilkan form tambah teh
    public function tambah()
    {
        return view('teh.tambahteh');
    }

    // method untuk insert data teh
    public function store(Request $request)
    {
        DB::table('teh')->insert([
            'merkteh' => $request->merk,
            'stockteh' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/teh');
    }

    // method untuk edit data teh
    public function edit($id)
    {
        $teh = DB::table('teh')->where('kodeteh', $id)->get();

        return view('teh.editteh', ['teh' => $teh]);
    }

    // update data teh
    public function update(Request $request)
    {
        DB::table('teh')->where('kodeteh', $request->id)->update([
            'merkteh' => $request->merk,
            'stockteh' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/teh');
    }

    // method untuk hapus data teh
    public function hapus($id)
    {
        DB::table('teh')->where('kodeteh', $id)->delete();

        return redirect('/teh');
    }

    // method untuk cari data teh
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $teh = DB::table('teh')
            ->where('merkteh', 'like', "%" . $cari . "%")
            ->paginate(10);

        return view('teh.teh', ['teh' => $teh]);
    }
}
