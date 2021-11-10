<?php 
$input = $_GET["fibo"];
function nacci($input) {
    $n1 = 0;
    $n2 = 1;
    $pengganti;

    for ($i = 1; $i <= $input; $i++) {
          
          $pengganti = $n1 + $n2;
          echo $n1 ." ";
          $n1 = $n2;
          $n2 = $pengganti;
        }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Fibonacci</title>
    <style>
        .card {
        margin: 0 auto;
        margin-top: 100px;
        margin-bottom: 10px;
        background-color: rgb(80, 80, 80);
        color: whitesmoke;
      }
    </style>
</head>
<body>
<div class="card" style="width: 60rem">
  <div class="card-body">
    <h1><pre><?php
    echo nacci($input)?></pre></h1> 
    </div>
  </div>
</body>
</html>