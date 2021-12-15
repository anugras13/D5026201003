<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
        $karyawan1 = DB::table('karyawan1')->paginate(5);


        // mengirim data pegawai ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }



    // method untuk menampilkan view form tambah meja
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan1.tambah');
    }



    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan1');
    }



    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }


    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan1');
    }




    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan1');
    }



    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $karyawan1 = DB::table('karyawan1')
            ->where('Nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }


    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
    }
}
