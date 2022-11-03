<?php
 
session_start();
 
if (!isset($_SESSION['nama_lengkap'])) {
    header("Location: profile.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- css -->
    <link rel="stylesheet" href="../asset/css/jawa.css">

    <title>Qtasnim | Profile</title>
</head>

<body>
    <!-- Top Nav Bar -->
    <div class="topnav">
        <img class="img-logo" src="../asset/img/logo.png" width="200px">

        <a href="../login/logout.php" style=" 1200px;"><Button class="btn btn-primary">BACK</Button></a>
    </div>

    <h1 align="center" class="text-judul">PROFILE</h1>
    <br>

    <!-- Profile -->
    <div class="main">
        <a href="update.php"><button type="button" style="float: right;" class="btn btn-secondary">EDIT PROFILE</button></a>
        <img class="img-user" src="../asset/img/user.png" width="150px">
        <?php echo "<h1>" . $_SESSION['nama_lengkap'] . "</h1>"; ?>
    </div>

    <!-- Data Diri -->
    <div class="main2">
        <h2 align="center">DATA DIRI</h2>

        <p style="color:#FFA500">No KTP</p>
        <?php echo "<h3>" . $_SESSION['no_ktp'] . "</h3>"; ?>

        <p style="color:#FFA500">Jenis Kelamin</p>
        <?php echo "<h3>" . $_SESSION['jenis_kelamin'] . "</h3>"; ?>

        <p style="color:#FFA500">Tanggal Lahir</p>
        <?php echo "<h3>" . $_SESSION['tgl'] . "</h3>"; ?>

        <p style="color:#FFA500">Agama</p>
        <h3>Islam</h3>

        <p style="color:#FFA500">Alamat</p>
        <h3>Jl. Percobaan</h3>
    </div>

    <!-- Data Keluarga -->
    <div class="main3">
        <h2 align="center">DATA KELUARGA</h2>

        <p style="color:#FFA500">Nama Ayah</p>
        <h3>-</h3>

        <p style="color:#FFA500">Nama Ibu</p>
        <h3>-</h3>

        <p style="color:#FFA500">Nama Istri/Suami</p>
        <h3>-</h3>
    </div>

    <!-- Riwayat Pendidikan -->
    <div class="main4">
        <h2 align="center">KONTAK</h2>

        <p style="color:#FFA500">No Telepon</p>
        <?php echo "<h3>" . $_SESSION['no_tlp'] . "</h3>"; ?>

        <p style="color:#FFA500">Email</p>
        <?php echo "<h3>" . $_SESSION['email'] . "</h3>"; ?>
    </div>

    <!-- Kontak -->
    <div class="main5">
        <h2 align="center">RIWAYAT PENDIDIKAN</h2>

        <p style="color:#FFA500">Asal Sekolah</p>
        <h3>-</h3>

        <p style="color:#FFA500">Periode Tahun Sekolah</p>
        <h3>-</h3>

        <p style="color:#FFA500">Alamat Sekolah</p>
        <h3>-</h3>
    </div>
</body>

</html>