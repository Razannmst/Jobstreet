<?php

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }
    return $rows;
}

function hapus($Id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_lowongan WHERE id = $Id");

        return mysqli_affected_rows($koneksi);
    }


    function tambah($data){
        global $koneksi;
        //ambil data dari tiap elemet dalam form
        $pekerjaan = htmlspecialchars($data["pekerjaan"]);
        $jeniskontrak = htmlspecialchars($data["jeniskontrak"]);
        $deskripsipekerjaan = htmlspecialchars($data["deskripsipekerjaan"]);
        $spesifikasipekerjaan = htmlspecialchars($data["spesifikasipekerjaan"]);
        $persyaratanpekerjaan = htmlspecialchars($data["persyaratanpekerjaan"]);
        $kompensasi = htmlspecialchars($data["kompensasi"]);
        $waktuperekrutan = htmlspecialchars($data["waktuperekrutan"]);

        // query insert data
        $query="INSERT INTO tb_lowongan VALUES ('','$pekerjaan','$jeniskontrak','$deskripsipekerjaan','$spesifikasipekerjaan','$persyaratanpekerjaan','$kompensasi','$waktuperekrutan','$tipe')";
        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }
    
    function ubah($data){
        global $koneksi;
        //ambil data dari tiap elemet dalam form
        $id = $data["id"];
        $pekerjaan = htmlspecialchars($data["pekerjaan"]);
        $jeniskontrak = htmlspecialchars($data["jeniskontrak"]);
        $deskripsipekerjaan = htmlspecialchars($data["deskripsipekerjaan"]);
        $spesifikasipekerjaan = htmlspecialchars($data["spesifikasipekerjaan"]);
        $persyaratanpekerjaan = htmlspecialchars($data["persyaratanpekerjaan"]);
        $kompensasi = htmlspecialchars($data["kompensasi"]);
        $waktuperekrutan = htmlspecialchars($data["waktuperekrutan"]);
   
    
        // query insert data
        $query="UPDATE tb_lowongan SET
                pekerjaan ='$pekerjaan',   
                jeniskontrak ='$jeniskontrak',   
                deskripsipekerjaan ='$deskripsipekerjaan',   
                spesifikasipekerjaan ='$spesifikasipekerjaan',   
                persyaratanpekerjaan ='$persyaratanpekerjaan',   
                kompensasi ='$kompensasi',   
                waktuperekrutan ='$waktuperekrutan',
                WHERE id = $id
    ";
        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }

    // pelamar

    function pelamar($data){
        global $koneksi;
        //ambil data dari tiap elemet dalam form
        $nama = htmlspecialchars($data["nama"]);
        $posisi = htmlspecialchars($data["posisi"]);
        $tanggal = htmlspecialchars($data["tanggal"]);
        $noktp = htmlspecialchars($data["noktp"]);
        $keahlian = htmlspecialchars($data["keahlian"]);
        $pendidikanterakhir = htmlspecialchars($data["pendidikanterakhir"]);
        $cv = htmlspecialchars($data["cv"]);
    

        // query insert data
        $query="INSERT INTO tb_pelamar VALUES ('$nama','$posisi','$tanggal','$noktp','$keahlian','$pendidikanterakhir','$cv')";
        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }
    ?>
