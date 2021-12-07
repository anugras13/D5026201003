    <!DOCTYPE html>
    <html>

    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link
            href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
            rel="stylesheet">


        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script
            src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
        </script>
    <style>
        .header {
            font-family: 'Courier New', Courier, monospace;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 300px;
            transition: all ease-in-out 0.5s;
            padding: 0 15px;
            box-shadow: -20px 0 35px -25px black, 20px 0 35px -25px black;
            background: #152238;
            overflow-y: auto;
            color: ghostwhite;
            }

        .profile img {
            margin: 15px auto;
            display: block;
            width: 120px;
            border: 8px solid #2c2f3f;
            }

        .card {
            position: absolute;
            width: 800px;
            height: 500px;
            padding: 25px;
            padding-top: 0;
            padding-bottom: 0;
            left: 50%;
            top: 67.5px;
            margin-left: -300px;
            background: #a5afb3;
            box-shadow: -20px 0 35px -25px black, 20px 0 35px -25px black;
            z-index: 5;
            }

        .card img {
            width: 150px;
            float: left;
            border-radius: 5px;
            margin-right: 20px;
            -webkit-filter: sepia(1);
            -moz-filter: sepia(1);
            filter: sepia(1);
            }

        .card h2 {
            font-family: courier;
            color: #333;
            margin: 0 auto;
            padding: 0;
            font-size: 15pt;
            }

        .card p {
            font-family: courier;
            color: #555;
            font-size: 13px;
            }
        .gawe {
            font-family: 'Courier New', Courier, monospace;
            font-size: 30px;
            font-weight: bolder;
        }
        .gowo {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }
        .mrg {
            margin: 5%;
            margin-top: 140px;
        }
        </style>


    </head>

    <body>
        <div class="container">
            <div class="col-lg-4">
            <div class="header">

              <div class="profile text-center">
                <img src="https://media-exp1.licdn.com/dms/image/C5603AQGPt__9ytE8ow/profile-displayphoto-shrink_400_400/0/1631987777174?e=1644451200&v=beta&t=FVEg7iIf6mJZ9HBK5IYhO0RQYLFajJX3L2JjXlFtP6c" style="width: 50%">
                <h2 class="text-light">Anugra Salaza</h2>
                <h4 class="text-light">PWEB D </h4>
                <h4 class="text-light">5026201003</h4>
                <h4 class="text-light"></h4>
              </div>

              <nav id="navbar" class="nav-menu navbar">
                <ul>
                  <li><a href="/pegawai"> <span>Pegawai</span></a></li>
                  <li><a href="/absen"> <span>Absen</span></a></li>
                  <li><a href="/pendapatan"> <span>Pendapatan</span></a></li>
                  <li><a href=""> <span>Minggu Depan</span></a></li>
                  <li><a href=""> <span>Praktikum</span></a></li>
                </ul>
              </nav>
              <footer class="mrg">
                <div class="row text-center">
                <span>&copy; 2021</span>
                </div>
                <div class="row text-center">
                <span>Hak Cipta oleh 5026201003 - Anugra Salaza</span>
            </div>
            </div>
            </div>

            <div class="col-lg-6">
                <h3 class="gawe">@yield('judulhalaman')</h3>
                <div class="card">
                    <div class="card-body gowo">
                        @section('konten')
                        @show
                    </div>
                </div>
            </div>


        </footer>
    </div>

    </body>

    </html>
