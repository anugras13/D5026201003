@extends('layout.happy')
@section('title', 'Data Karyawan')
@section('judulhalaman', 'Tambah Data karyawan')
@section('konten')
<br/>
<a href="/karyawan1">Kembali</a>

	<br/>
	<br/>
                <form id="forms" action="/karyawan1/store" method="post">
				{{ csrf_field() }}
                        <div class="row mt-3 justify-content-around">
                            <label for="NIP" class="col-sm-3 col-form-label col-form-label-lg">NIP
                                </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="NIP"
                                    placeholder="" name="NIP" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Nama" class="col-sm-3 col-form-label col-form-label-lg">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Nama"
                                    placeholder="" name="Nama">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Pangkat" class="col-sm-3 col-form-label col-form-label-lg">Pangkat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Pangkat"
                                    placeholder="Isi dengan 5 huruf max" name="Pangkat">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Gaji" class="col-sm-3 col-form-label col-form-label-lg">Gaji</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="Gaji"
                                    placeholder="" name="Gaji">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary form-control" id="kirim" value="Simpan Data">Tambah</button>
                        </div>
                    </div>
                </form>

@endsection
