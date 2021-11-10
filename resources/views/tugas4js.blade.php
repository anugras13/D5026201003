<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fibonacci</title>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Fibonacci</h1>
    <p>
      Fibonacci adalah deret angka yang diperoleh dengan menjumlahkan dua angka sebelumnya: <br />
      1, 1, 2, ... <br />
      1 + 2 = 3 -> 1, 1, 2, 3, ...<br />
      2 + 3 = 5 -> 1, 1, 2, 3, 5, ...<br />
      3 + 5 = 8 -> 1, 1, 2, 3, 5, 8, ...<br />
      Begitu seterusnya, <br />
      Agar lebih mudah memahami maka dapat klik tombol di bawah V
    </p>
    <button id="sembarang">Klik saya!</button>
    <script>
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
    </script>
  </body>
</html>
