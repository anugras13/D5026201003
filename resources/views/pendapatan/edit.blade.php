@extends('layout.happy')
@section('title', 'Mengedit data pendapatan')
@section('judulhalaman', 'Edit Pendapatan Pegawai')
@section('konten')

    <br/>
	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form  id="validation" class="row g-3" action="/pendapatan/update" method="post" >
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> IDPegawai  </h2>
            </label>
            <div class="col-lg-7">
              <input  class="form-control"  type="number" name="idPegawai" required="required" value="{{ $p->idPegawai }}">
            </div>
          </div>

           <div class="row mb-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Bulan  </h2>
            </label>
            <div class="col-lg-7">
              <input class="form-control" type="number" name="bulan" required="required" value="{{ $p->bulan }}">
            </div>
          </div>

          <div class="row justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Tahun  </h2>
            </label>
            <div class="col-lg-7">
             <input class="form-control" type="" name="tahun" required="required" value="{{ $p->tahun }}">
            </div>
          </div>


               <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Gaji  </h2>
            </label>
            <div class="col-lg-7">
              <input  class="form-control" type="number" name="gaji" required="required" value="{{ $p->gaji }}">
            </div>
          </div>


               <div class="row my-3 justify-content-around">
            <label class="col-lg-5 form-label">
              <h2> Tunjangan  </h2>
            </label>
            <div class="col-lg-7">
              <input  class="form-control" type="number" name="tunjangan" required="required" value="{{ $p->tunjangan }}">
            </div>
          </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection

