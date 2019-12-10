<?php

session_start();
require_once 'controladores/funciones.php';

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <title>Tesla</title>
  <!-- <link rel="stylesheet" href="css/debug.css"> -->
  <link rel="stylesheet" href="css/helpers.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="hero">
    <div class="container-fluid">
      <?php require_once 'partials/header.php' ?>
    </div>
    <header class="Titulos">
      <div class="center" style="top: 82px;">
        <h1 class="">Tesla</h1><br>
      </div>
      <div class="center">
        <p class="display-3">Roadster</p>
      </div>
    </header>
    <main class="center">
      <div class="container fixed-bottom mb-4">
        <div class="row">
          <div class="center-column col-12">
            <p class=" text-center text-white">
              ​The quickest car in the world, with record-setting<br>
              acceleration, range and performance.
            </p>
          </div>
          <div class="center-column col-md-3 col-4">
            <p class="text-center text-white">
              1.9<span class="is-size-5 text-white">s</span>
            </p>
            <p class="text-center text-white">0-60 mph</p>
          </div>
          <div class="center-column col-md-3 col-4" style="border-left: 1px solid gray;">
            <p class="text-center text-white"><span class="is-size-5">+</span>250<span class="is-size-5">mph</span></p>
            <p class="text-center text-white">Top Speed</p>
          </div>
          <div class="center-column col-md-3 col-4" style="border-left: 1px solid gray;">
            <p class="title text-center text-white">620</span><span class="is-size-5">mi</span></p>
            <p class="text-center text-white">Mile Range</p>
          </div>
          <div class="center-column col-md-3 col-12">
            <a class="btn btn-dark text-center text-white" style="width: 100%; border: 0.15em solid white;">
              Reserve ahora
            </a>
          </div>
        </div>
      </div>
    </main>
    

  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>

</html>