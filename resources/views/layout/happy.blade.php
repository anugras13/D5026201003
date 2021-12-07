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
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 300px;
            transition: all ease-in-out 0.5s;
            padding: 0 15px;
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

        .nav-menu {
            padding: 30px 0 0 0;
            }

        .nav-menu * {
            margin: 0;
            padding: 0;
            list-style: none;
            }

        .nav-menu > ul > li {
            position: relative;
            white-space: nowrap;
            }

        .nav-menu a, .nav-menu a:focus {
            display: flex;
            align-items: center;
            color: #a8a9b4;
            padding: 12px 15px;
            margin-bottom: 8px;
            transition: 0.3s;
            font-size: 15px;
            }

        .nav-menu a i, .nav-menu a:focus i {
            font-size: 24px;
            padding-right: 8px;
            color: #6f7180;
            }

        .nav-menu a:hover, .nav-menu .active, .nav-menu .active:focus, .nav-menu li:hover > a {
            text-decoration: none;
            color: #fff;
            }

        .nav-menu a:hover i, .nav-menu .active i, .nav-menu .active:focus i, .nav-menu li:hover > a i {
            color: #149ddd;
            }

        </style>


    </head>

    <body>
            <div class="col-lg-3">
            <div class="card">
            <div class="card-body header">

              <div class="profile text-center">
                <img src="https://media-exp1.licdn.com/dms/image/C5603AQGPt__9ytE8ow/profile-displayphoto-shrink_400_400/0/1631987777174?e=1644451200&v=beta&t=FVEg7iIf6mJZ9HBK5IYhO0RQYLFajJX3L2JjXlFtP6c" style="width: 50%">
                <h2 class="text-light">Anugra Salaza</h2>
                <h4 class="text-light">PWEB D </h4>
                <h4 class="text-light">5026201003</h4>
                <h4 class="text-light"></h4>
              </div>

              <nav id="navbar" class="nav-menu navbar">
                <ul>
                  <li><a href="/pegawai" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Pegawai</span></a></li>
                  <li><a href="/absen" class="nav-link scrollto"><i class="bx bx-file-blank"></i>  <span>Absen</span></a></li>
                  <li><a href="/pendapatan" class="nav-link scrollto"><i class='bx bx-money-withdraw'></i><span>Pendapatan</span></a></li>
                  <li><a href="" class="nav-link scrollto"><i class='bx bx-calendar-week'></i><span>Minggu Depan</span></a></li>
                  <li><a href="" class="nav-link scrollto"><i class='bx bx-expand-horizontal'></i><span>Praktikum</span></a></li>
                </ul>
              </nav>
            </div>
            </div>
            </div>

            <div class="col-lg-6">
                <div class="card" style="width: 70rem;">
                    <div class="card-body">
                        <h3 class="card-title">@yield('judulhalaman')</h3>
                        @section('konten')
                        @show
                </div>
            </div>
        </div>

    </body>

    </html>
