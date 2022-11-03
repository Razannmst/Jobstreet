<?php
//menyertakan file program koneksi.php pada register
require('../koneksi/koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if( isset($_POST['submit']) ){
        // menghilangkan backshlases
        $no_ktp = stripslashes($_POST['no_ktp']);
        //cara sederhana mengamankan dari sql injection
        $no_ktp = mysqli_real_escape_string($koneksi, $no_ktp);
        $nama_lengkap     = stripslashes($_POST['nama_lengkap']);
        $nama_lengkap     = mysqli_real_escape_string($koneksi, $nama_lengkap);
        $no_tlp    = stripslashes($_POST['no_tlp']);
        $no_tlp    = mysqli_real_escape_string($koneksi, $no_tlp);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($koneksi, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($koneksi, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($koneksi, $repass);
        $level    = stripslashes($_POST['level']);
        $level    = mysqli_real_escape_string($koneksi, $level);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($nama_lengkap)) && !empty(trim($no_ktp)) && !empty(trim($email)) && !empty(trim($no_tlp)) && !empty(trim($password)) && !empty(trim($repass))  && !empty(trim($level)) ){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){
                //memanggil method cek_nama untuk mengecek apakah user sudah ter+-aftar atau belum
                if( cek_email($email,$koneksi) == 0 ){
                    //insert data ke database
                    $query = "INSERT INTO tb_pelamar (no_ktp,nama_lengkap,email,no_tlp,password,level ) VALUES ('$no_ktp','$nama_lengkap','$email','$no_tlp','$password','$level')";
                    $result   = mysqli_query($koneksi, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman ../login/login.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['no_ktp'] = $no_ktp;
                        
                        header('Location: ../login/login.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek email apakah sudah terdaftar atau belum
    function cek_email($email,$koneksi){
        $email = mysqli_real_escape_string($koneksi,$no_ktp);
        $query = "SELECT * FROM tb_pelamar WHERE no_ktp = '$email'";
        if( $result = mysqli_query($koneksi, $query) ) return mysqli_num_rows($result);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- costum css -->
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Form REGISTRASI</title>
</head>

<body>
    <div class="header">
        <img class="logo" src="../asset/img/logo.png" width="240" height="90">
    </div>
    <div class="flexing">
        <br>
        <br>
    </div>
    <br>
    <section class="container-fluid mb-4">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <form class="bglogins col-lg-7 border border-dark form-login rounded-3 p-5 shadow-lg p-3 mb-5"
                action="reg.php" method="POST">
                <h4 class="text-center font-weight-bold"> REGISTER </h4>
                <?php if($error != ''){ ?>
                <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                <?php } ?>

                <div class="form-group">
                    <label for="nama_lengkap">Nama</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                        placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Alamat Email</label>
                    <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp"
                        placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="no_tlp">No Telepon</label>
                    <input type="int" class="form-control" id="no_tlp" name="no_tlp"
                        placeholder="Masukkan Nomor Telepon">
                </div>
                <div class="form-group">
                    <label for="no_ktp">No KTP</label>
                    <input type="int" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukkan Nomor KTP">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="password" class="form-control" id="InputPassword" name="password"
                        placeholder="Password">
                    <?php if($validate != '') {?>
                    <p class="text-danger"><?= $validate; ?></p>
                    <?php }?>
                </div>
                <div class="form-group">
                    <label for="InputPassword">Ulangi Password</label>
                    <input type="password" class="form-control" id="InputRePassword" name="repassword"
                        placeholder="Masukan kembali Password">
                    <?php if($validate != '') {?>
                    <p class="text-danger"><?= $validate; ?></p>
                    <?php }?>
                </div>
                <div class="form-group">
                    <label for="level">Yakin Ingin Mendaftar?</label>
                    <input type="radio" name="level" value="pelamar">ya
                    <input type="radio" name="level">Tidak
                    <?php if($validate != '') {?>
                    <p class="text-danger"><?= $validate; ?></p>
                    <?php }?>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                <div class="form-footer mt-2">
                    <p> Sudah punya account? <a href="../login/login.php">Login</a></p>
                </div>
            </form>
        </section>
    </section>
    </section>
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>