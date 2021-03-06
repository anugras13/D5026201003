<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="ets-pweb.js"></script>
    <style>
        .container {
            padding-top: 5%;
            padding-bottom: 5%;
            padding-left: 20%;
            padding-right: 20%;
        }
        .card {
          margin: 0 auto;
          margin-bottom: 10px;
          background-color: white;

        }

        .card-body {
          flex: 1 1 auto;
          padding: 0;
        }
        .kongteks {
          margin: 1rem;
        }
        .ijo {
          background-color: greenyellow;
        }
        .abang {
            background-color: blue;
            color: white;
        }
        .benpas {
            padding : 0;
        }
        .benadoh {
            padding-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class ="container">
        <div class ="card row">
            <p class="kongteks">Nama Mahasiswa : Anugra Salaza </br>
                Nama Panggilan : Anugra / Ega </br>
                NRP : 5026201003
            </p>
            <div class="card-header text-center">
                Form Pendaftaran Kuota Internet
            </div>
            <form action="https://youtu.be/dQw4w9WgXcQ" id="mengcoba">
                <div class="kongteks row">
                  <label for="name" class="form-label col-3">Nama Mahasiswa</label>
                  <div class="col-1">:</div>
                  <div class="col-8">
                  <input type="text" class="form-control col-3" id="name" placeholder="ex: Anugra Salaza" name="fname" />
                </div>
                </div>
                <div class="kongteks row">
                  <label for="NRP" class="form-label col-3">NRP Mahasiswa</label>
                  <div class="col-1">:</div>
                  <div class="col-8">
                  <input type="text" class="form-control col-4" id="username" placeholder="ex: 5026201003" name="nrp" />
                  </div>
                </div>
                <div class="kongteks row">
                    <label name="jurusan" for="jurusan" class="form-label col-3 ">Jurusan</label>
                    <div class="col-1">:</div>
                    <div class="col-8">
                    <select class="form-select form-control" id="jurusan" name="jurusan">
                    <option value="">Please choose</option>
                    <option value="1">Sistem Informasi</option>
                    <option value="2">Elektro</option>
                    <option value="3">Informatika</option>
                  </select>
                  </div>
                </div>

                <div class="kongteks row">
                  <label for="nohp" class="form-label col-3">Nomor HP:</label>
                  <div class="col-1">:</div>
                  <div class="col-8">
                  <input type="text" class="form-control col-4" id="nohp" placeholder="ex : 085833285285" name="nohp" />
                  </div>
                </div>
                <div class="row kongteks benadoh">
                <div class="col-3"></div>
                <button type="submit" class="btn btn-primary abang col-3">Kirim</button>
                <div class="col-1"></div>
                <button type="reset" class="btn ijo col-3">Reset</button>
                <div class="col-2"> </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</body>
