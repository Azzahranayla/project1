<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_divisi = $_POST['nama_divisi'];
    $singkatan_divisi = $_POST['singkatan_divisi'];
    $sql = "UPDATE divisi SET nama_divisi='$nama_divisi', singkatan_divisi='$singkatan_divisi' WHERE id='$id' ";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: table_divisi.php');
    } else {
        header('Location: form_divisi.php');
    }
}
