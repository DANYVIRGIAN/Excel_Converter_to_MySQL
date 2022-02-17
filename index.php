<!DOCTYPE html>
<html>
<head>
	<title>data_customer</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}

		p{
			color: green;
		}
	</style>
	<h2>IMPORT EXCEL KE DATABASE DATA CUSTOMER</h2>

	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>

	<a href="upload.php">IMPORT DATA</a>
	<table border="1">
		<tr>
			<th>id</th>
			<th>tanggal</th>
			<th>nama</th>
			<th>jenis_kelamin</th>
			<th>alamat</th>
			<th>no_hp</th>
			<th>perusahaan</th>
			<th>jabatan</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no=1;
		$data = mysqli_query($koneksi,"select * from data_customer_indocrete");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $d['tanggal']; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['jenis_kelamin']; ?></th>
				<th><?php echo $d['alamat']; ?></th>
				<th><?php echo $d['no_hp']; ?></th>
				<th><?php echo $d['perusahaan']; ?></th>
				<th><?php echo $d['jabatan']; ?></th>
			</tr>
			<?php 
		}
		?>

	</table>


</body>
</html>