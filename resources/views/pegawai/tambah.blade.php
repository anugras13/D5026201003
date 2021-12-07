@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'Tambah Data Pegawai')
@section('konten')
    <br/>
	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<div class="row mt-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Nama</h2>
            </label>
            <div class="col-lg-7">
              <input type="text" class="form-control" required="required" id="name" name="nama" >
            </div>
          </div>

          <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Jabatan  </h2>
            </label>
            <div class="col-lg-7">
              <input type="text" class="form-control" required="required" name="jabatan" id="jabatan" >
            </div>
          </div>

           <div class="row mb-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Umur  </h2>
            </label>
            <div class="col-lg-7">
              <input type="number" class="form-control" required="required" name="umur" id="umur" >
            </div>
          </div>

          <div class="row justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Alamat  </h2>
            </label>
            <div class="col-lg-7">
              <textarea required="required" name="alamat" class="form-control"></textarea>
            </div>
          </div>

		<input type="submit" value="Simpan Data">
	</form>
@endsection
