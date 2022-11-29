<?php require '../koneksi/koneksi.php'?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Qtasnim | Home</title>
</head>
<body>
    <div class="wrapper">
        <div class="header" style="background-color:#d9d9d9">
            <a href="index.php"><img class="logo" src="../asset/img/logox.png"></a>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php"><button class="btn btn-outline-dark me-md-2 bg-dark"
                                style="margin-right:15px;color:white;" type="button">HOME</button></a>
                        <a href="../lowongan/jobsheet-admin.php"><button class="btn btn-outline-dark" style="margin-right:15px"
                                type="button">VACANCY</button></a>
                        <a href="master.php"><button class="btn btn-outline-dark" style="margin-right:15px"
                                type="button">MASTER DATA</button></a>
                        <div class="dropdown">
                            <button type="button" id="buton" class="btn btn-outline-dark dropdown-toggle"
                                data-toggle="dropdown"><i class="fa fa-user"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="../login/logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tampilan home-->
        <div class="container">
            <br>
        <?php 
        $data = mysqli_query($koneksi,"SELECT * FROM tb_ptk where sts_ptk = 1");
        $jumlah_data = mysqli_num_rows($data);?>
            <p>Jumlah Lowongan Yang menunggu di konfirmasi&nbsp;:<b>&nbsp;<?php echo $jumlah_data?></b></p>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr style="text-align: center;">
                        <th>Belum dikonfirmasi</th>
                        <th>Diterima</th>
                        <th>Ditolak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
				$batas = 5;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"SELECT * from tb_ptk");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data1 = mysqli_query($koneksi,"SELECT * from tb_ptk INNER JOIN tb_posisi ON tb_ptk.id_posisi = tb_posisi.id_posisi INNER JOIN tb_user ON tb_ptk.id_user = tb_user.id_user WHERE sts_ptk = '1' limit $halaman_awal, $batas");
				$data2 = mysqli_query($koneksi,"SELECT * from tb_ptk INNER JOIN tb_posisi ON tb_ptk.id_posisi = tb_posisi.id_posisi INNER JOIN tb_user ON tb_ptk.id_user = tb_user.id_user WHERE sts_ptk = '2' limit $halaman_awal, $batas");
                $data3 = mysqli_query($koneksi,"SELECT * from tb_ptk INNER JOIN tb_posisi ON tb_ptk.id_posisi = tb_posisi.id_posisi INNER JOIN tb_user ON tb_ptk.id_user = tb_user.id_user WHERE sts_ptk = '3' limit $halaman_awal, $batas");
                $nomor = $halaman_awal+1;
                while
                ($d = mysqli_fetch_array($data1)){
					?>         
                            <tr>
                            <td>
                            <h4 align="left" style="margin-left:10px" class="nama_lowongan"> <a 
                                    href="details.php?id=<?=$d['id']?>"><?php echo $d['posisi'];?></a></h4>
                            <h6 align="left" style="margin-left:10px"><?php echo $d['jenis_pekerjaan'];?></h6>
                            <h6 align="left" style="color:red;margin: 0 0 0 10px">
                                Deadline
                                :&nbsp;<?php echo $d['tgl_dibutuhkan'];?></h6>
                                <h6 align="left" style="float:left;margin:20px 0 0 10px;">Pembuat&nbsp;:&nbsp;<?php echo $d['nama_user'];?></h6>
                            <a href="details.php?id=<?=$d['id']?>">
                                <h7 style="float:right;margin:20px 10px 0 0;">details</h7>
                            </a>
                        </td>

                <?php
                }
                while
                ($d = mysqli_fetch_array($data2)){
					?> 
                        <td> 
                            <h4 align="left" style="margin-left:10px" class="nama_lowongan"> 
                                <a href="details.php?id=<?=$d['id']?>"><?php echo $d['posisi'];?></a>
                            </h4> 
                            <h6 align="left" style="margin-left:10px"><?php echo $d['jenis_pekerjaan'];?></h6>
                            <h6 align="left" style="color:red;margin: 0 0 0 10px">
                                Deadline
                                :&nbsp;<?php echo $d['tgl_dibutuhkan'];?></h6>
                                <h6 align="left" style="float:left;margin:20px 0 0 10px;">Pembuat&nbsp;:&nbsp;<?php echo $d['nama_user'];?></h6>
                            <a href="details.php?id=<?=$d['id']?>">
                                <h7 style="float:right;margin:20px 10px 0 0;">details</h7>
                            </a>
                        </td>
  
                <?php
                }
                while
                ($d = mysqli_fetch_array($data3)){
					?> 
                        
                            <td>
                            <h4 align="left" style="margin-left:10px" class="nama_lowongan"> <a
                                    href="details.php?id=<?=$d['id']?>"><?php echo $d['posisi'];?></a>
                            </h4>
                            <h6 align="left" style="margin-left:10px"><?php echo $d['jenis_pekerjaan'];?></h6>
                            <h6 align="left" style="float:left;margin:39px 0 0 10px;">Pembuat&nbsp;:&nbsp;<?php echo $d['nama_user'];?></h6>
                            <a href="details.php?id=<?=$d['id']?>">
                                <h7 style="float:right;margin:39px 10px 0 0;">details</h7>
                            </a>
                        </td>  
                        </tr>
                        
                    <?php
				}
				?>
                </tbody>
            </table>
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href=''"; } ?>>Previous</a>
                    </li>
                    <?php
                for($x=1;$x<=$total_halaman;$x++){
                    ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                    </li>
                    <?php
                }
                ?>
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman < $total_halaman) { echo "href=''"; } ?>>Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <footer class="bg-dark text-center text-light text-lg-start">
            <!-- Grid container -->
            <div class="container p-1">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-3 col-lg-6 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <img src="../asset/img/logo.png"    class="logo" style="padding-right:35px">
                            <hr class="mb-3 mt-0 d-inline-block mx-auto"
                                style="width: 160px;background-color: #7c4dff; height: 2px" />
                            <i class="bi bi-geo-alt">
                                <p>Padasuka Ideal Residence </p>
                                <p> Blok.A5 No.11 Bandung</p>
                            </i>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-envelope"> <a href="mailto:pklqtasnim@gmail.com"
                                        style="color:white;">&nbsp pklqtasnim@gmail.com</a></i></p><br>
                            <p><i class="fas fa-phone fa-rotate-90"></i> &nbsp +62
                                2220529499 &nbsp &nbsp &nbsp &nbsp &nbsp</p></i>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/qtasnimcom"
                            role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/qtasnim?lang=en"
                            role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://qtasnim.com/" role="button"
                            target="index.php"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1"
                            href="https://instagram.com/qtasnim_digital?igshid=YmMyMTA2M2Y" role="button"><i
                                class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://id.linkedin.com/company/qtasnim"
                            role="button"><i class="fab fa-linkedin-in"></i></a>

                        <!-- Github -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Qtasnim"
                            role="button"><i class="fab fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2022 Copyright:
                    <a class="text-light" href="https://qtasnim.com/">PT. QTASNIM</a>
                </div>
                <!-- Copyright -->
        </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>