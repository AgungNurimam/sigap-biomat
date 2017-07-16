<form id="inputalat" method="post" action="savealat.php" enctype="multipart/form-data">
		<left><p>
			<label>Nama Alat :</label><br>
			<input type="text" id="nama_alat" name="nama_alat" required>
		</p>

		<p>
			<label>Photo Alat:</label><br>
			<input type="file" id="images" name="images">
		</p>

		<p>
			<label>Deskripsi :</label><br>
			<textarea style="width:600px; height:450px" id="deskripsi" name="deskripsi" required></textarea>
			
		</p>
	
		<p>
			<label>Kategori :</label><br>
			<input type="text" id="Kategori" name="Kategori" required>
		</p>

		<p>
			<label>Operator:</label><br>
			<input type="text" id="operator_alat" name="operator_alat" required>
		</p>

		<p>
			<label>Keterangan Penggunaan: </label><br>
			<input type="text" id="keterangan" name="keterangan" required>
		</p>
		
		
	
		<td colspan=2><input type="submit" id="submit" value="Kirim"></td>
	
</form>

