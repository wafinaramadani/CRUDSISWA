<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function view()
    {
        $siswas = siswa::all();
        return view('view_viewsiswa', compact('siswas'));
    }

    public function create()
    {
        return view('view_inputsiswa');
    }

    public function store(Request $request)
    {
        $siswa = new siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->TTL = $request->TTL;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->angkatan = $request->angkatan;
        $siswa->save();
        return redirect('siswa');
    }


    public function edit($id)
    {
        $siswa = siswa::find($id);
        return view('view_editsiswa', compact('siswa'));
    }

    public function update(Request $request)
    {
        $siswa = siswa::find($request->id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->TTL = $request->TTL;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->angkatan = $request->angkatan;
        $siswa->save();
        return redirect('siswa');
    }

    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
