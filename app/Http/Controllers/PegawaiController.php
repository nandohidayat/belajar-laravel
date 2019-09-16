<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        // $pegawai = DB::table('pegawai')->paginate(10);
        $pegawai = Pegawai::all();
        // $pegawai = Pegawai::first();
        // $pegawai = Pegawai::find(1);
        // $pegawai = Pegawai::where('nama', 'Manah Mandala')->get();

        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('pegawai_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pegawai = DB::table('pegawai')->where('pegawai_nama', 'like', "%" . $cari . "%")->paginate();

        return view('index', ['pegawai' => $pegawai]);
    }

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
