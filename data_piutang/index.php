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
            <h2>Data Piutang</h2>
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
                            <th>Jumlah Hutang</th>
                            <th>Jumlah Piutang</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            include '../config.php';
                            $no = 1;
                            $data = mysqli_query($link,"select * from data_piutang");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['id_pel']; ?></td>
                                    <td><?php echo $d['jumlah_hutang']; ?></td>
                                    <td><?php echo $d['jumlah_piutang']; ?></td>
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
                            <th>Jumlah Hutang</th>
                            <th>Jumlah Piutang</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            include '../config.php';
                            $no = 1;
                            $data = mysqli_query($link,"select * from data_piutang");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['id_pel']; ?></td>
                                    <td><?php echo md5($d['jumlah_hutang']); ?></td>
                                    <td><?php echo md5($d['jumlah_piutang']); ?></td>
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