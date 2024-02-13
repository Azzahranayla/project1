<?php
include "config.php";
$id =$_GET['id'];
$query = "DELETE FROM divisi WHERE id= '$id' ";
$sql = mysqli_query($conn, $query);
if ($sql) {
    header('Location: table_divisi.php');
}
