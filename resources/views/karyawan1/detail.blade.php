@extends('layout.happy')
@section('title', 'Data Karyawan')
@section('judulhalaman', 'Detail Data Karyawan')
@section('konten')
</br>
<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)
                <form id="forms" class="row g-3" action="/karyawan1" method="Get">
				{{ csrf_field() }}
                        <div class="row">
							<input type="hidden" name="id" value="{{ $p->NIP }}"> <br/>
                            <label for="Nama" class="col-sm-3 col-form-label col-form-label-lg">Nama
                                </label>
                            <div class="col-sm-8">
                                <label type="text" class="form-control form-control-lg" id="Nama"
                                    placeholder="" name="Nama" value="{{ $p->Nama }}">{{ $p->Nama }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Pangkat" class="col-sm-3 col-form-label col-form-label-lg">Pangkat</label>
                            <div class="col-sm-8">
                                <label type="text" class="form-control form-control-lg" id="Pangkat"
                                    placeholder="" name="Pangkat" value="{{ $p->Pangkat }}">{{ $p->Pangkat }}</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="Gaji" class="col-sm-3 col-form-label col-form-label-lg">Gaji</label>
                            <div class="col-sm-8">
                                <label type="text" class="form-control form-control-lg" id="Gaji"
                                    placeholder="" name="Gaji" value="{{ $p->Gaji }}">{{ number_format($p->Gaji) }}</label>
                            </div>
                        </div>
                        <br>

                </form>
	@endforeach


@endsection
