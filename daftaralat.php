<form name="formcari" method="post" action="index.php?webpro=formcari">
			<div>
				<tr> <td>  Cari alat </td>
				<td style="margin-top: 0px;"> <input type="text" name="name" class="form-control"> </td>
				</tr>
				<td></td>
				<p><button class="btn btn-primary btn-sm" name="SUBMIT" id="SUBMIT" value=" Cari ">Cari</button></p>
			</div>
<?php
include "koneksi.php";
$has = mysql_query("select * from alat");
$num = mysql_num_rows($has);

if($num<1){
	echo'<center>Tidak Ada Data Alat</center>';
}else{
while($data=mysql_fetch_array($has)){
	$art = substr($data['deskripsi'],0,100);
	 echo '
					<h2>'.$data['nama_alat'].'</h2>
					<img class="img-rounded" width="330" height="280" src="admin/foto-alat/'.$data['foto_alat'].'">
					<h4>Kategori : '.$data['Kategori'].'</h4>
					<p>'.$art.'..</p>

				    <a class="btn btn-primary btn-sm" href="alat.php?p='.$data['id_alat'].'">Read More</a>
				    <hr>
					<br><br>
		
		 ';}
}
?>