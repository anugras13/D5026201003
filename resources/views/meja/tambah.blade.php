@extends('layout.happy')
@section('title', 'Data Meja')
@section('judulhalaman', 'Tambah Data Meja')
@section('konten')
<br/>
<a href="/meja">Kembali</a>

	<br/>
	<br/>
                <form id="forms" action="/meja/store" method="post">
				{{ csrf_field() }}
                        <div class="row mt-3 justify-content-around">
                            <label for="merk" class="col-sm-3 col-form-label col-form-label-lg">Merk
                                </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="merk"
                                    placeholder="" name="merk" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="stock" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="stock"
                                    placeholder="" name="stock">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3 justify-content-around">
                        <label class="col-lg-3 form-label">
                             Tersedia
                        </label>
                        <div class="col-lg-8">
                            <input type="radio" id="y" name="tersedia" value="Y">
                            <label for="y">Iya</label><br>
                            <input type="radio" id="n" name="tersedia" value="N" checked="checked">
                            <label for="n">Tidak</label><br>
                        </div>

                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary form-control" id="kirim" value="Simpan Data">Tambah</button>
                        </div>
                    </div>
                </form>

@endsection
