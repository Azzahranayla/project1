<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp = $_POST['no_hp'];
    $gol_darah = $_POST['gol_darah'];
    $alamat = $_POST['alamat'];
    $divisi = $_POST['divisi'];
    $jabatan = $_POST['jabatan'];
    $sql = "UPDATE karyawan SET nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', no_hp='$no_hp', gol_darah='$gol_darah', alamat='$alamat', divisi='$divisi', jabatan='$jabatan'  WHERE id='$id' ";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: table_karyawan.php');
    } else {
        header('Location: form_karyawan.php');
    }
}
