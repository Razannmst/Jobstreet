<?php
include '../koneksi/koneksi.php';
$jobportal = mysqli_query($koneksi, 'SELECT * FROM tb_lowongan');
            while ($data= mysqli_fetch_array ($jobportal)){
            }

            require 'function.php';

                ?>


<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="bt/css/bootstrap.min.css"> 
    <title>Qtasnim | Home Admin</title> 
    <style>
      .nav-link{
        text-decoration:none;
        color:#FFFFFF;
      }
    </style>
    
  </head> 
  <body>

    <!-- gambar logo -->
    <img src="../asset/img/logowo.png" width="280" height="100">
  
    <nav class="navbar" style="background-color: #FA8128;">
  <!-- Navbar content -->
  <ul class="nav nav-tabs">
  
  <li class="nav-item">
    <a class="nav-link active" aria current="page"  href="lowongan.php">Tambah Lowongan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pendaftar.php">Pendaftar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pelamar.php">Pelamar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">LogOut</a>
  </li>
</ul>
</nav>

<div class="row text-center m-4">
        <div class="col text-dark mt-5">
            <h2>Tambah Lowongan Pekerjaan</h2>
        </div>
    </div>

<br>
<div class="container">
    <a href="tambah.php" class="btn btn-outline-dark hvers">+Tambahkan Lowongan</a>
    <br><br><br>
<table class=" table table-light table-striped" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Pekerjaan</th>
            <th>Jenis Kontrak</th>
            <th>Deskripsi Pekerjaan</th>
            <th>Spesifikasi Pekerjaan</th>
            <th>Persyaratan Pekerjaan</th>
            <th>Kompensasi</th>
            <th>Waktu Perekrutan</th>
        </tr>
    <?php $i = 1?>
    <?php foreach ($jobportal as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?php echo $row["id"]; ?>"><i class=" fs-4 bi bi-pen text-primary  me-2 "></i></a> 
                <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');"><i class="fs-4 bi bi-trash text-danger  me-2 "></i></a> 
            </td>
            
            <td><?= $row["pekerjaan"]; ?></td>
            <td><?= $row["jeniskontrak"]; ?></td>
            <td><?= $row["deskripsipekerjaan"]; ?></td>
            <td><?= $row["spesifikasipekerjaan"]; ?></td>
            <td><?= $row["persyaratanpekerjaan"]; ?></td>
            <td><?= $row["kompensasi"]; ?></td>
            <td><?= $row["waktuperekrutan"]; ?></td>
        </tr>
    <?php $i++;?>
    <?php endforeach?>
    </table>
</div>

  </body> 
</html>