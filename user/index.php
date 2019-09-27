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
            <h2>User</h2>
            <br>
            <a href="/penyandian">< Back</a><br><br>
            <a href="daftar.php">+ Add Data</a>
            <div>
                <br><br>
                    <h4>User</h4>
                <table class="table tab-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            include '../config.php';
                            $no = 1;
                            $data = mysqli_query($link,"select * from user");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['id']; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['username']; ?></td>
                                    <td><?php echo $d['password']; ?></td>
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
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            include '../config.php';
                            $no = 1;
                            $data = mysqli_query($link,"select * from user");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['id']; ?></td>
                                    <td><?php echo md5($d['nama']); ?></td>
                                    <td><?php echo md5($d['username']); ?></td>
                                    <td><?php echo md5($d['password']); ?></td>
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