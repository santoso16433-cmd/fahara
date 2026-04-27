<?php
session_start();
include 'koneksi.php';

$q = mysqli_query($conn,"SELECT * FROM users WHERE username='$_POST[username]' AND password='$_POST[password]'");
$d = mysqli_fetch_assoc($q);

if($d){
    $_SESSION['user']=$d;
    header("Location:index.php");
}else{
    echo "Login gagal";
}
?>