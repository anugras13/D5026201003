@extends('layout.happy')
@section('title', 'Data Meja')
@section('judulhalaman', 'Edit Data Meja')
@section('konten')
</br>
<a href="/meja"> Kembali</a>

	<br/>
	<br/>

	@foreach($meja as $p)
	<div class="container-fluid">
                <form id="forms" class="row g-3" action="/meja/update" method="post">
				{{ csrf_field() }}
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->kodemeja }}"> <br/>
                            <label for="merk" class="col-sm-3 col-form-label col-form-label-lg">Merk
                                </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" id="merk"
                                    placeholder="" name="merk" required="required" value="{{ $p->merkmeja }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-lg" id="stock"
                                    placeholder="" name="stock" value="{{ $p->stockmeja }}">
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3 justify-content-around">
                            <label class="col-lg-3 form-label">
                             Tersedia
                            </label>
                            <div class="col-lg-8">
                                <input type="radio" id="y" name="tersedia" value="Y" @if($p->tersedia==='Y') checked="checked" @endif>
                                <label for="y">Iya</label><br>
                                <input type="radio" id="n" name="tersedia" value="N"   @if($p->tersedia==='N') checked="checked" @endif>
                                <label for="n">Tidak</label><br>
                            </div>

                        <div class="row">
                        <div class="col-3 ">
                            <button  type="submit" class="btn btn-primary form-control" id="kirim" value="Simpan Data">Simpan Data</button>
                        </div>
                    </div>
                </form>
	@endforeach


@endsection
