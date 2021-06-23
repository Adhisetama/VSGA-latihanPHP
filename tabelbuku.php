<?php
require('function.php');
$rakbuku = query('data_buku');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Tabel Buku</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="style/default.css">

</head>
  <body>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Sistem Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
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
    
    <!-- table content -->

    <br>
    <div class="container card dataanggota">
        <div class="card-body">
            <h2>Data Buku</h2>
            <br>
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col" class="col-1">No.</th>
                    <th scope="col" class="col-3">Judul</th>
                    <th scope="col" class="col-2">Pengarang</th>
                    <th scope="col" class="col-1">Penerbit</th>
                    <th scope="col" class="col-1">Tahun Terbit</th>
                    <th scope="col" class="col-1">Kota Terbit</th>
                    <th scope="col" class="col-1">ISBN</th>
                    <th scope="col" class="col-2">Menu</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach($rakbuku as $buku) : ?>
                  <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><a href="<?= 'databuku.php?id='.$buku['id_buku'] ?>">
                      <?= $buku['judul_buku'] ?>
                    </a></td>
                    <td><?= $buku['pengarang'] ?></td>
                    <td><?= $buku['penerbit'] ?></td>
                    <td><?= $buku['tahun_terbit'] ?></td>
                    <td><?= $buku['isbn'] ?></td>
                    <td><?= $buku['kota_terbit'] ?></td>
                    <td>
                      <button type="button" class="btn btn-primary">Edit</button>
                      <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>
                  <?php @$no++;
                  endforeach ?>
                </tbody>
            </table>
            <br>
            <button type="button" class="btn btn-info">Tambah Buku</button>
        </div>
    </div>


    <script src="src/js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="src/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>