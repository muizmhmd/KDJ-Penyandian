<html>
   <head>
        <title>Penyandian</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
   </head> 
   <body>
   <?php include "../header.php"; ?>
       <div class="container">
            <br>
            <h2>Pelanggan</h2>
            <br>
            <a href="/penyandian">< Back</a><br><br>
            <a href="create.php">+ Add Data</a>
            <div>
                <br><br>
                    <h4>Sebelum Enkripsi</h4>
                <table class="table tab-striped">
                    <thead>
                        <tr>
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            include '../config.php';
                            $no = 1;
                            $data = mysqli_query($link,"select * from pelanggan");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['id_pel']; ?></td>
                                    <td><?php echo $d['nama_pel']; ?></td>
                                    <td><?php echo $d['no_hp']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>
                                    <td><?php echo $d['email']; ?></td>
                                </tr>
                                <?php 
                            }
                            ?>
                    </tbody>
                </table>
            </div>
            <div>
                <br><br>
                    <h4>Sesudah Enkripsi</h4>
                <table class="table tab-striped">
                    <thead>
                        <tr>
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            include '../config.php';
                            $no = 1;
                            $data = mysqli_query($link,"select * from pelanggan");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['id_pel']; ?></td>
                                    <td><?php echo md5($d['nama_pel']); ?></td>
                                    <td><?php echo md5($d['no_hp']); ?></td>
                                    <td><?php echo md5($d['alamat']); ?></td>
                                    <td><?php echo md5($d['email']); ?></td>
                                </tr>
                                <?php 
                            }
                            ?>
                    </tbody>
                </table>
            </div>
       </div>
   </body>
</html>