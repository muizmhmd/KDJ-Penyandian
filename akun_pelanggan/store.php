<?php 
// koneksi database
include '../config.php';

if(isset($_POST['simpan'])){
    // menangkap data yang di kirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $recovery = $_POST['recovery'];

    if(empty($username)){
        echo "<p style='color:red'>Username tidak boleh kosong!</p>";
    }
    else if(empty($password)){
        echo "<p style='color:red'>Password tidak boleh kosong!</p>";
    }
    else if(empty($recovery)){
        echo "<p style='color:red'>Recovery tidak boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($link,"insert into akun_pelanggan values('','$username','$password','$recovery')");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }
}
?>