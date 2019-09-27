<html>
    <head>
        <title>Proses Insert Data</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php 
        require_once("../config.php");
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $cekuser = mysqli_query($link, "select * from user where username = '$username'");
        if (mysqli_num_rows($cekuser) <> 0) {
            echo "Username sudah terdaftar! ";
            echo '<a href="daftar.php">Back</a>';
        } else {
            if (!$username || !$pass || !$name) {
                echo "Masih ada data yang kosong! ";
                echo '<a href="daftar.php">Back</a>';
            } else {
                $simpan = mysqli_query($link, "insert into user(id, nama, username, password) values('$id','$name','$username','$pass')");
                if($simpan){
                    echo 'Pendaftaran sukses, tambah <a href="daftar.php">Data</a>';
                    echo "<p>Enkripsi MD5: ".$pass. "</p>";
                } else {
                    echo "Proses gagal!";
                }
            }
        }
        header("location:index.php");
        ?>
    </body>
</html>