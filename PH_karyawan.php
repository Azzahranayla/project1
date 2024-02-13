<?php
include "config.php";
$id = $_GET['id'];
$query = "DELETE FROM karyawan WHERE id= '$id' ";
$sql = mysqli_query($conn, $query);
if ($sql) {
    header('Location: table_karyawan.php');
}
