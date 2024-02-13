<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_jabatan = $_POST['nama_jabatan'];
    $sql = "UPDATE jabatan SET nama_jabatan='$nama_jabatan' WHERE id='$id' ";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: table_jabatan.php');
    } else {
        header('Location: form_jabatan.php');
    }
}
