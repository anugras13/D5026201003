@extends('layout.happy')
@section('title', 'Mengedit Data Absensi')
@section('judulhalaman', 'Edit Absensi Pegawai')
@section('konten')

{{-- <h3>{{ $judul }}</h3> --}}
@foreach($absen as $a)
<form action="/absen/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $a->ID }}">    
</br>
   Form Edit Data Pegawai
</br>
</br>

    <div class="container">

        <div class="row">
            <div class='col-lg-12'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai </label>
                    <div class='col-sm-4 input-group date' id='nama'>
                        <select class="form-control" name="IDPegawai">
                            @foreach($pegawai as $p )
                                <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class='col-lg-12'>
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal </label>
                    <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="Tanggal" required="required" value="{{ $a->Tanggal }}"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#dtpickerdemo').datetimepicker({
                        format: "YYYY-MM-DD hh:mm:ss",
                        "defaultDate": new Date(),
                        locale : "id"
                    });
                });
            </script>
        </div>


         <div class="row">
            <div class='col-lg-12'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Status </label>
                    <div class='col-sm-4 input-group date' id='nama'>
                        <input type="radio" id="h" name="Status" value="H" @if($a->Status==='H') checked="checked" @endif>
                        <label for="h">HADIR</label><br>
                        <input type="radio" id="a" name="Status" value="A" checked="checked" @if($a->Status==='A') checked="checked" @endif>
                        <label for="a">TIDAK HADIR</label><br>

                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5">
          <div
            class="d-flex flex-lg-row flex-column justify-content-start"
          >
            <a href="/absen">
            <button

              class="btn green me-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg"
            >
              Kembali
            </button>
            </a>
             <input type="submit" class="btn blue btn-primary btn-lg" value="Simpan Data" >
            </div>
        </div>
    </div>

</div>
</div>
</div>
</form>
@endforeach
@endsection
