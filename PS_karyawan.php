<?php

include "config.php";

if (isset($_POST['saveall'])) {

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp = $_POST['no_hp'];
    $gol_darah = $_POST['gol_darah'];
    $alamat = $_POST['alamat'];
    $divisi = $_POST['divisi'];
    $jabatan = $_POST['jabatan'];

    $sql = "INSERT INTO karyawan (nama,jenis_kelamin,tempat_lahir,tanggal_lahir,no_hp,gol_darah,alamat,divisi,jabatan) VALUES ('$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$no_hp','$gol_darah','$alamat','$divisi','$jabatan')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location:table_karyawan.php');
    } else {
        header('Location:form_karyawan.php');
    }
}
