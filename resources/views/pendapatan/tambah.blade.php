@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'Tambah Data Pendapatan')
@section('konten')
	<br/>
	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}

		<div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> IDPegawai  </h2>
            </label>
            <div class="col-lg-7">
              <input  class="form-control"  type="number" name="idPegawai" required="required"  >
            </div>
          </div>

           <div class="row mb-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Bulan  </h2>
            </label>
            <div class="col-lg-7">
              <input class="form-control" type="number" name="bulan" required="required"  >
            </div>
          </div>

          <div class="row justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Tahun  </h2>
            </label>
            <div class="col-lg-7">
             <input class="form-control" type="" name="tahun" required="required"  >
            </div>
          </div>


               <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Gaji  </h2>
            </label>
            <div class="col-lg-7">
              <input  class="form-control" type="number" name="gaji" required="required"  >
            </div>
          </div>


               <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Tunjangan  </h2>
            </label>
            <div class="col-lg-7">
              <input  class="form-control" type="number" name="tunjangan" required="required"  >
            </div>
          </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
