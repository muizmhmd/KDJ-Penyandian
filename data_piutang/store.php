<?php 
// koneksi database
include '../config.php';

if(isset($_POST['simpan'])){
    // menangkap data yang di kirim dari form
    $hutang = $_POST['hutang'];
    $piutang = $_POST['piutang'];
    $id = $_POST['id'];

    if(empty($id)){
        echo "<p style='color:red'>ID tidak boleh kosong!</p>";
    }
    else if(empty($hutang)){
        echo "<p style='color:red'>Hutang tidak boleh kosong!</p>";
    }
    else if(empty($piutang)){
        echo "<p style='color:red'>Piutang tidak boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($link,"insert into data_piutang values('$id','$hutang','$piutang')");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }
}
?>