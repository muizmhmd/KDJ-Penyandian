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
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
            <div class="form-group">
                <label for="recovery">Password Recovery</label>
                <input class="form-control" type="text" name="recovery" id="recovery">
            </div>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
			<a href="index.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>