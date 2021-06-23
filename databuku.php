<?php
require('function.php');

$rows = query('data_buku', 'id_buku', $_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Data Buku</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="style/default.css">
    <link rel="stylesheet" href="style/databuku.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Sistem Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="intro.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Transaksi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Entri Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="tabelbuku.php">Data Buku</a>
              <a class="dropdown-item" href="tabelanggota.php">Data Anggota</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="container databuku">
        <div class="card bg-light mb-3">
            <div class="card-header"><h3>Data Buku</h1></div>
            <div class="card-body row">
                <div class="col-md-3 col-sm-12">
                    <div class="image-fluid coverbuku"></div>
                </div>
                <div class="col-sm-12 col-md-9 tabeldatabuku">
                    <div class="row">
                        <div class="col-3 data">Judul Buku</div>
                        <div class="col-9">: <b><?= $rows[0]['judul_buku'] ?></b></div>
                    </div>
                    <div class="row">
                        <div class="col-3 data">ISBN</div>
                        <div class="col-9">: <?= $rows[0]['isbn'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3 data">Keterangan</div>
                        <div class="col-9">: <?= $rows[0]['keterangan'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3 data">Pengarang</div>
                        <div class="col-9">: <?= $rows[0]['pengarang'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3 data">Penerbit</div>
                        <div class="col-9">: <?= $rows[0]['penerbit'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3 data">Tahun Terbit</div>
                        <div class="col-9">: <?= $rows[0]['tahun_terbit'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3 data">Kota Terbit</div>
                        <div class="col-9">: <?= $rows[0]['kota_terbit'] ?></div>
                    </div>
                </div>
                <div class="col-12 editbutton">
                    <button type="button" class="btn btn-info">Edit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="src/js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="src/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>