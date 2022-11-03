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
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="../lowongan/lowongan.php">Semua lowongan</a></li>
        <li><a href="dipilih.php">Progress Lamaran</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>

    <!-- ini bar -->
    <div class="bg">
        <br><br><br><br>
        <h2 align="center" style="color: white;">PT.QTASNIM DIGITAL TEKNOLOGI<h2>
                <h5 align="center" style="color: white;">QUALITY IS OUR COMMITMENT<h5>
                        <br><br><br><br>
    </div>
    <!-- tampilan home-->
    <center>
        <H2><b> LOWONGAN TERBARU</b></H2>
        <!-- list lowongan pekerjaan -->
        <?php
            include '../koneksi/koneksi.php';
            $jobportal = mysqli_query($koneksi, 'SELECT * FROM tb_lowongan order by tanggal_post desc LIMIT 5');
            while ($data= mysqli_fetch_array ($jobportal))
            {
                ?>

        <div class="card" style="width: 55rem;">
            <br>
            <h4 align="left" style="margin-left:10px" class="nama_lowongan"> <a
                    href="../lowongan/details.php?id=<?=$data['id']?>"><?php echo $data['pekerjaan'];?></a></h4>
            <h6 align="left" style="margin-left:10px"><?php echo $data['jeniskontrak'];?></h6>
            <h6 align="left" style="color:red;margin-left:10px">Deadline :&nbsp; <?php echo $data['deadline'];?></h6>
            <a  href="../lowongan/details.php?id=<?=$data['id']?>"><h7 style="float:right;margin-right:45px">details</h7> </a>
        </div>
        </div>
        <?php
            }
            ?>
    </center>
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