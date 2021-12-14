@extends('layout.happy')
@section('title', 'Edit Data Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')
@section('konten')
    <br/>
	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai" method="get">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		<div class="row mt-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Nama</h2>
            </label>
            <div class="col-lg-7">
              <label type="text" class="form-control" required="required" id="name" name="nama" value="{{ $p->pegawai_nama }}">{{ $p->pegawai_nama }}</label>
            </div>
          </div>

          <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Jabatan  </h2>
            </label>
            <div class="col-lg-7">
              <label type="text" class="form-control" required="required" name="jabatan" id="jabatan" value="{{ $p->pegawai_jabatan }}">{{ $p->pegawai_jabatan }}</label>
            </div>
          </div>

           <div class="row mb-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Umur  </h2>
            </label>
            <div class="col-lg-7">
              <label type="number" class="form-control" required="required" name="umur" id="umur" value="{{ $p->pegawai_umur }}">{{ $p->pegawai_umur }}</label>
            </div>
          </div>

          <div class="row justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Alamat  </h2>
            </label>
            <div class="col-lg-7">
              <label required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</label>
            </div>
          </div>
	</form>
	@endforeach
@endsection
