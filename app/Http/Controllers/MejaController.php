<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MejaController extends Controller
{
    public function index()
    {
        // mengambil data dari table meja
        $meja = DB::table('meja')->paginate(5);


        // mengirim data pegawai ke view index
        return view('meja.index', ['meja' => $meja]);
    }



    // method untuk menampilkan view form tambah meja
    public function tambah()
    {

        // memanggil view tambah
        return view('meja.tambah');
    }



    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('meja')->insert([
            'merkmeja' => $request->merk,
            'stockmeja' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/meja');
    }



    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $meja = DB::table('meja')->where('kodemeja', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('meja.edit', ['meja' => $meja]);
    }


    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('meja')->where('kodemeja', $request->id)->update([
            'merkmeja' => $request->merk,
            'stockmeja' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/meja');
    }




    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('meja')->where('kodemeja', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/meja');
    }



    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $meja = DB::table('meja')
            ->where('merkmeja', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('meja.index', ['meja' => $meja]);
    }


    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $meja = DB::table('meja')->where('kodemeja', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('meja.detail', ['meja' => $meja]);
    }
}
