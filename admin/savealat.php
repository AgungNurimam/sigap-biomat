<?php ob_start();
include "koneksi.php";
if($_POST){
	$nama_alat 	        = $_POST['nama_alat'];
	$deskripsi	 	    = $_POST['deskripsi'];
	$Kategori		 	= $_POST['Kategori'];
	$operator_alat	 	= $_POST['operator_alat'];
	$keterangan		 	= $_POST['keterangan'];
	$foto_alat	 		= $_FILES['foto_alat']['name'];
	
	if(!empty($_FILES['foto_alat']['name'])){
		
		move_uploaded_file($_FILES['foto_alat']['name'], 'foto_alat/'.$_FILES['foto_alat']['name']);

		mysql_query("insert into alat(nama_alat, foto_alat, deskripsi, Kategori, operator_alat, keterangan) values('$nama_alat', '$foto_alat', '$deskripsi', '$Kategori','$operator_alat','$keterangan')") or die(mysql_error()); 
		
	} else {
		mysql_query("insert into alat(nama_alat, deskripsi, Kategori, operator_alat, keterangan) values('$nama_alat', '$deskripsi' ,'$Kategori','$operator_alat', '$keterangan')") or die(mysql_error());
		
	}
	header('location:index.php');
	exit;
}

?>


