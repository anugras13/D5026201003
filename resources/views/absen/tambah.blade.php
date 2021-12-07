
   @extends('layout.happy')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
    <form action="/absen/store" method="post">
        {{ csrf_field() }}
    </br>
    </br>
        <div class="row">
            <div class='col-lg-10'>
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Nama Pegawai :</label>
                    <div class='col-sm-5 input-group date' id='nama'>
                        <select class="form-control" name="IDPegawai">
                            @foreach($pegawai as $p )
                                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class='col-lg-10'>
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-3 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="Tanggal" required="required" />
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
    </div>

        Status <br />
        <input type="radio" id="html" name="Status" value="A">
        <label for="html">Absen</label><br>
        <input type="radio" id="css" name="Status" value="H" checked="checked">
        <label for="css">Hadir</label><br>


        <p><input type="submit" value="Simpan Data"></p>
    </form>
    <p> <a href="/absen"> Kembali</a></p>
@endsection
