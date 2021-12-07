<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pendapatan = DB::table('pendapatan')->get();

        // mengirim data pegawai ke view index
        return view('pendapatan.index', ['pendapatan' => $pendapatan]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('pendapatan.tambah');
    }
    // method untuk insert data ke table pendapatan
    public function store(Request $request)
    {
        // insert data ke table pendapatan
        DB::table('pendapatan')->insert([
            'idPegawai' => $request->idPegawai,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'gaji' => $request->gaji,
            'tunjangan' => $request->tunjangan
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')->where('id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pendapatan.edit', ['pendapatan' => $pendapatan]);
    }

    public function update(Request $request)
    {

        DB::table('pendapatan')->where('id', $request->id)->update([
            'idPegawai' => $request->idPegawai,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'gaji' => $request->gaji,
            'tunjangan' => $request->tunjangan
        ]);

        return redirect('/pendapatan');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pendapatan')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
}
