<?php 
require 'functions.php';

if (isset($_POST["submit"])){

	if (tambah($_POST)>0){
		echo "<script>
		alert('Data berhasil ditambahkan');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
		alert('Data gagal ditambahkan');
		document.location.href = 'index.php';
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menambah Produk</title>
</head>
<body>

	<h1>Isikan data yang ingin ditambahkan!</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="nama_produk">Nama Produk</label>
			<input type="text" name="nama_produk" id="nama_produk" required>
			
		</li>
		<li>
			<label for="jumlah">Jumlah</label>
			<input type="text" name="jumlah" id="jumlah" required>
			
		</li>
		<li>
			<label for="harga">Harga</label>
			<input type="text" name="harga" id="harga" required>
			
		</li>
		<button type="submit" name="submit" >Submit</button>

	</ul>
	
</form>

</body>
</html>