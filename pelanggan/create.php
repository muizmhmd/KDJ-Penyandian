<!DOCTYPE html>
<html>
<head>
    <title>Form Add Pelanggan</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<style>
		.erro {color: red};
	</style>
</head>
<body>
<?php include "../header.php"; ?>
<div class="container">
	<br>
	<h2>Form Add Data</h2>
	<br>
	
	<?php
		include ("store.php");
	?>

	<div class="col-md-6">
		<form method="post" action="create.php" autocomplete="off">
			<div class="form-group">
				<label for="name">Nama</label>
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<div class="form-group">
				<label for="hp">No. HP</label>
				<input class="form-control" type="text" name="hp" id="hp">
			</div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="alamat">
            </div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
			<a href="index.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>