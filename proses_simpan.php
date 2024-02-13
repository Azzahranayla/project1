<?php

include "config.php";

if (isset($_POST['saveall'])) {

    $nama_jabatan = $_POST['nama_jabatan'];
    $sql = "INSERT INTO jabatan (nama_jabatan) VALUES ('$nama_jabatan')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location:table_jabatan.php');
    } else {
        header('Location:form_jabatan.php');
    }
}
