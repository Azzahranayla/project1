<?php
include "config.php";
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$sql = "SELECT * FROM admin WHERE user_name='$user_name' and password='$password' ";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    session_start();
    $hasil = mysqli_fetch_assoc($query);
    $_SESSION['nama'] = $hasil['nama'];
    header('Location: index.php');
} else {
    header('Location: login.php');
}
