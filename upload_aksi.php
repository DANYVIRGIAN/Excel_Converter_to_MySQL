<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filecustomer_indocrete']['name']) ;
move_uploaded_file($_FILES['filecustomer_indocrete']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filecustomer_indocrete']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filecustomer_indocrete']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$tanggal     = $data->val($i, 1);
	$nama   = $data->val($i, 2);
	$jenis_kelamin  = $data->val($i, 3);
	$alamat  = $data->val($i, 4);
	$no_hp  = $data->val($i, 5);
	$perusahaan  = $data->val($i, 6);
	$jabatan  = $data->val($i, 7);

	if($tanggal != "" && $nama != "" && $jenis_kelamin != "" && $alamat != "" && $no_hp != "" && $perusahaan != "" && $jabatan != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into data_customer_indocrete values('','$tanggal','$nama','$jenis_kelamin','$alamat','$no_hp','$perusahaan','$jabatan')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filecustomer_indocrete']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>