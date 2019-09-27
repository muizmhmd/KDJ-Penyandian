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
				<label for="ID">ID Pelanggan</label>
				<input class="form-control" type="text" name="id" id="id">
			</div>
			<div class="form-group">
				<label for="hutang">Hutang</label>
				<input class="form-control" type="text" name="hutang" id="hutang">
			</div>
            <div class="form-group">
                <label for="piutang">Piutang</label>
                <input class="form-control" type="text" name="piutang" id="piutang">
            </div>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
			<a href="index.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>