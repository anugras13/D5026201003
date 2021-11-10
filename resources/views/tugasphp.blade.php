<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fibonacci</title>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

      .card {
        padding: 5% 25%;
        margin: 0 auto;
        margin-bottom: 10px;
        background-color: rgb(80, 80, 80);
        color: whitesmoke;
      }
      .card-header {
        background-color: rgb(53, 53, 53);
        color: white;
      }
      .card-body {
        flex: 1 1 auto;
        padding: 0;
      }

      </style>
  </head>
  <body>

    <div class = "card">
        <div class = "card-header">
            <h1> Fibonacci </h1>
        </div>
        <div class = "card-body">
    <p class="al">
      Fibonacci adalah deret angka yang diperoleh dengan menjumlahkan dua angka sebelumnya: <br />
      1, 1, 2, ... <br />
      1 + 2 = 3 -> 1, 1, 2, 3, ...<br />
      2 + 3 = 5 -> 1, 1, 2, 3, 5, ...<br />
      3 + 5 = 8 -> 1, 1, 2, 3, 5, 8, ...<br />
      Begitu seterusnya, <br />
      Agar lebih mudah memahami dapat dicoba dibawah
    </p>
    <form action="fibo.php" id="" method="GET">
    <div class="mb-3 mt-3">
              <label class="form-label">Masukkan angka</label>
              <input type="number" id="fibo" name="fibo" required="" class="form-control" />
            </div>
    <button id="sembarang">Klik saya!</button>
    </form>
    </div>
    </div>
  </body>
</html>


<!-- <script>
      $("#sembarang").click(function () {
        const number = parseInt(prompt("Enter the number of terms: "));
        let n1 = 0,
          n2 = 1,
          pengganti;

        alert("Fibonacci Series:");

        for (let i = 1; i <= number; i++) {
          alert(n1);
          pengganti = n1 + n2;
          n1 = n2;
          n2 = pengganti;
        }
      });
    </script> -->

