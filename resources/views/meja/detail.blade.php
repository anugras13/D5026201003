@extends('layout.happy')
@section('title', 'Data Meja')
@section('judulhalaman', 'Detail Data Meja')
@section('konten')
</br>
<a href="/meja"> Kembali</a>

	<br/>
	<br/>

	@foreach($meja as $p)
                <form id="forms" class="row g-3" action="/meja" method="Get">
				{{ csrf_field() }}
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->kodemeja }}"> <br/>
                            <label for="merk" class="col-sm-3 col-form-label col-form-label-lg">Merk
                                </label>
                            <div class="col-sm-8">
                                <label type="text" class="form-control form-control-lg" id="merk"
                                    placeholder="" name="merk" required="required" value="{{ $p->merkmeja }}">{{ $p->merkmeja }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="harga" class="col-sm-3 col-form-label col-form-label-lg">Stock</label>
                            <div class="col-sm-8">
                                <label type="number" class="form-control form-control-lg" id="stock"
                                    placeholder="" name="stock" value="{{ $p->stockmeja }}">{{ $p->stockmeja }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-3 justify-content-around">
                            <label class="col-lg-3 form-label">
                                Tersedia
                            </label>
                            <div class="col-lg-8">
                                <label type="text" name="tersedia" class="form-control" >{{$p->tersedia}}</label>
                            </div>


                    </div>
                </form>
	@endforeach


@endsection
