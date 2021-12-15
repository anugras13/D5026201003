@extends('layout.happy')
@section('title', 'Data Karyawan')
@section('judulhalaman', 'Edit Data Karyawan')
@section('konten')
</br>
<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)
	<div class="container-fluid">
                <form id="forms" class="row g-3" action="/karyawan1/update" method="post">
				{{ csrf_field() }}
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->NIP }}"> <br/>
                            <label for="Nama" class="col-sm-3 col-form-label col-form-label-lg">Nama
                                </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Nama"
                                    placeholder="" name="Nama" required="required" value="{{ $p->Nama }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Pangkat" class="col-sm-3 col-form-label col-form-label-lg">Pangkat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Pangkat"
                                    placeholder="Isi dengan 5 huruf max" name="Pangkat" value="{{ $p->Pangkat }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Gaji" class="col-sm-3 col-form-label col-form-label-lg">Gaji</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Gaji"
                                    placeholder="" name="Gaji" value="{{ $p->Gaji }}">
                            </div>
                        </div>
                        <br>


                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary form-control" id="kirim" value="Simpan Data">Simpan Data</button>
                        </div>
                    </div>
                </form>
	@endforeach


@endsection
