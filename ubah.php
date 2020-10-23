<?php 
require 'functions.php';

$id = $_GET["id"];

$produk_lama = query("SELECT * FROM produk WHERE id= $id")[0];





if (isset($_POST["submit"])){

	if (ubah($_POST)>0){
		echo "<script>
		alert('Data berhasil diubah!');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
		alert('Data gagal diubah!');
		document.location.href = 'index.php';
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Produk</title>
</head>
<body>
	<h1>Silahkan ubah data</h1>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $produk_lama=["id"];?>">
	<ul>
		<li>
			<label for="nama_produk">Nama Produk</label>
			<input type="text" name="nama_produk" id="nama_produk" required value="<?php echo $produk_lama["$nama_produk"]?>">
			
		</li>
		<li>
			<label for="jumlah">Jumlah</label>
			<input type="text" name="jumlah" id="jumlah" required value="<?php echo $produk_lama["$jumlah"]?>">
			
		</li>
		<li>
			<label for="harga">Harga</label>
			<input type="text" name="harga" id="harga" required value="<?php echo $produk_lama["$harga"]?>">
			
		</li>
		<button type="submit" name="submit" >Ubah Data</button>

	</ul>
	
</form>

<br /><b>Notice</b>:  Undefined index: harga in <b>C:\xampp\htdocs\arkademy\ubah.php</b> on line <b>51</b><br />

</body>
</html>