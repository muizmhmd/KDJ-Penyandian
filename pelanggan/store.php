<?php 
// koneksi database
include '../config.php';

if(isset($_POST['simpan'])){
    // menangkap data yang di kirim dari form
    $name = $_POST['name'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    if(empty($name)){
        echo "<p style='color:red'>Name tidak boleh kosong!</p>";
    }
    else if(empty($hp)){
        echo "<p style='color:red'>No. HP tidak boleh kosong!</p>";
    }
    else if(empty($alamat)){
        echo "<p style='color:red'>Alamat tidak boleh kosong!</p>";
    }
    else if(empty($email)){
        echo "<p style='color:red'>Email tidak boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($link,"insert into pelanggan values('$id','$name','$hp','$alamat','$email')");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }
}
?>