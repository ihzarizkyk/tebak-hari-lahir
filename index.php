<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<head>
	<title>Tebak Hari Lahirmu</title>
</head>
<style>
	body{
		font-family: helvetica;
	}
</style>
<body>

	<div class="container">

	<h2>Tebak Hari Lahirmu - harilahir.rf.gd</h2>
	<br>

	<blockquote>
      <h6>Coba Cek Keakuratannya di kalender masing-masing ya...</h6>
    </blockquote>

    <br>

	<form action="" method="post">
		<p style="font-weight: bold;">Bulan :</p> <br>
		<input type="number" name="bulan" min="1" max="12" required> <br><br>
		<p style="font-weight: bold;">Tanggal :</p> <br>
		<input type="number" name="tanggal" min="1" max="31" required> <br><br>
		<p style="font-weight: bold;">Tahun :</p> <br>
		<input type="number" name="tahun" min="1800" max="" required> <br><br>
		<button type="submit" class="btn waves-effect orange darken-4" name="hasil">
			TEBAK
		</button>
	</form>

	<br>

	<div class="row">
	<div class="col s2">
	<div class="white-text black">
	<?php

	$bulan = $_POST['bulan'];
	$tanggal = $_POST['tanggal'];
	$tahun = $_POST['tahun'];
	$hasil = $_POST['hasil'];

	if(isset($hasil)){
		echo date("l",mktime(0,0,0,$bulan,$tanggal,$tahun));
	}else{
		echo "tidak ada";
	}


	?>
	</div>
	</div>
	</div>


	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
