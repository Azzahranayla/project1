<?php

include "config.php";

if (isset($_POST['saveall'])) {

    $nama_divisi = $_POST['nama_divisi'];
    $singkatan_divisi = $_POST['singkatan_divisi'];
    $sql = "INSERT INTO divisi (nama_divisi,singkatan_divisi) VALUES ('$nama_divisi','$singkatan_divisi')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location:table_divisi.php');
    } else {
        header('Location:form_divisi.php');
    }
}
