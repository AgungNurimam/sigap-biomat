<form name="formcari" method="post" action="index.php?webpro=formcari">
			<div>
				<tr> <td>  Cari alat </td>
				<td> <input type="text" name="name"> </td>
				</tr>
				<td></td>
				<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value=" Cari " > </td>
			</div>
<?php
include "koneksi.php";
$has = mysql_query("select * from alat");
$num = mysql_num_rows($has);

if($num<1){
	echo'<center>Tidak Ada Artikel</center>';
}else{
while($data=mysql_fetch_array($has)){
	$art = substr($data['deskripsi'],0,100);
	 echo '
					<h2>'.$data['nama_alat'].'</h2>
					<img width="330" height="280" src="foto-alat/'.$data['foto_alat'].'">
					<h4>Kategori : '.$data['Kategori'].'</h4>
					<p>'.$art.'..</p>

				    <a href="alat.php?p='.$data['id_alat'].'">Read More</a>
					<br><br>
		
		 ';}
}
?>