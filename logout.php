<?php
session_start();
//koneksi
$con = mysqli_connect("localhost", "root", "12345678", "bukudb"); //jika aktif

if (!isset($_SESSION['uname']) || !isset($_SESSION['password'])) {
     //redirect back ke halaman login 
     header("location: index.php");
} else {
    header("location: index.php");
    session_destroy();
} 