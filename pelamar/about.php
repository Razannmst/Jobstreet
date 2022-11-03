<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Qtasnim | Home</title>
</head>

<body>
    <div class="header" style="position:relative">
        <img class="header-logo" src="../asset/img/logo.png" width="200">
        <div class="dropdown" align="right">
            <button type="button" id="buton" class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i
                    class="fa fa-user"></i></button>
            <div class="dropdown-menu">
                <div class="dropdown-header"></div>
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="../login/logout.php">Logout</a>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
    <!--navbar-->
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="../lowongan/lowongan.php">Semua lowongan</a></li>
        <li><a href="dipilih.php">Progress Lamaran</a></li>
        <li class="active"><a href="about.php">About Us</a></li>
    </ul>
    <!-- ini bar -->

    <div class="row">
        <div class="col-md-6">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
                <img src="../asset/img/logowo.png" height="255" style="float:left;">
            </center>
        </div>
        <div class="col-md-6">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p class="about">PT. Qtasnim Digital Teknologi (Qtasnim) berdiri secara legal sejak Mei 2013. Qtasnim
                merupakan
                perusahaan yang berkomitmen bergerak di bidang solusi dan pelayanan bidang teknologi informasi. Tim
                kami merupakan para profesional yang telah memiliki dedikasi dan pengalaman di bidang teknologi
                informasi lebih dari 7 tahun.​
            </p>
            <p>
                Kami berpengalaman dalam memberikan solusi terbaik dalam membangun dan mengembangkan aplikasi
                enterprise, integrasi sistem, pengembangan webportal dan aplikasi mobile. Soliditas dan integritas
                tim telah mampu membangun perusahaan yang unggul dan dapat dipertanggungjawabkan untuk memberikan
                layanan terbaik bagi klien dan seluruh stakeholder terkait dalam bisnis dan pengembangannya. Oleh
                karenanya, kualitas telah menjadi komitmen kami.​</p>
        </div>
    </div>
    </div>
    <script>
    function myalert() {
        alert("HARAP LOGIN DULU")
    }
    </script>
    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #D9D9D9;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-family: "Times New Roman", Times, serif;
        font-size: 15px;
    }

    li a:hover {
        background-color: #FA8128;
        color: #fff;
    }
    </style>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</html>