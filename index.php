<?php 
require 'functions.php';

$produk = query("SELECT * FROM produk ORDER BY id DESC");

if ( isset($_POST["cari"]) ) {
	$produk = cari($_POST["keyword"]);
}



 ?>

<!DOCTYPE html>
<html>
	<head>
	<title>Data Penjualan</title>
	
	</head>

	<body>
		<h1>Data Produk</h1>

		<a href="halamanform.php"> Tambah data produk </a>

		<form action="" method="post" >
			<input type="text" name="keyword" size="35">
			<button type="submit" name="cari">Search</button>
		</form>

		<br>

		<h1>Data penjualan</h1>
			<table border="1" cellpadding="10" cellspacing="0">
				<tr>
					<th>No.</th>
					<th>Nama Produk</th>
					<th>Jumlah Produk</th>
					<th>Harga Produk/satuan</th>
					<th>Keterangan</th>
				<tr>
				<?php $i=1;  ?>
				<?php foreach ($produk as $row) : ?>
				<tr>
					<td <?= $i; ?>></td>
					<td><?= $row["nama_produk"];  ?></td>
					<td><?= $row["jumlah"];  ?></td>
					<td><?= $row["harga"];  ?></td>
					<td>
						<a href="ubah.php?id=<?php echo $row["id"];  ?>" >Ubah</a> |
						<a href="hapus.php?id=<?php echo $row["id"];  ?>" onclick= "return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
					</td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
				
			</table>





	</body>
</html>