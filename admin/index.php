<!DOCTYPE html>
<html>
	<head>
	<?php
		include 'koneksi.php';
	?>
		<title>SIGAP-BIOMAT Admin</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<div id="site-container">
			<header id="header">
				
			</header>

			<nav id="menu">
				<ul>
					<li><a href="index.php?webpro=daftaralat">Daftar Alat</a></li>
					<li><a href="index.php?webpro=insert">Input Alat</a></li>
					<li><a href="index.php?webpro=update">Edit Alat</a></li>
					<li><a href="index.php?webpro=logout">Logout</a></li>

					
				</ul>
			</nav>
			<div id="content-wrapper">
				<section id="content">
					<?php
						if (isset($_GET['webpro'])) {
							$pageload=$_GET['webpro'];
						}else{
							$pageload="berita";
						}
						switch ($pageload) {
							case 'formatartikel':
								include "formartikel.php";
								break;
							case 'insert':
								include"inputalat.php";
								break;
							case 'view':
								include"view.php";
								break;
							case 'edit':
								include"edit.php";
								break;
							case 'delete':
								include"delete.php";
								break;
							case 'populer':
								include"popularPosts.php";
								break;
							case 'update':
								include"update.php";
								break;
							case 'formcari':
								include"cari.php";
								break;
							case 'formcari2':
								include"cari1.php";
								break;
							default:
								include "daftaralat.php";
								break;
						}

					?>
				</section>

				<aside id="sidebar" align="left">
					<section class="sidebar-content">
						<h1 class="tittlesidebar">Kategori</h1>
						<dl>
							<dt><a href="">Alat Proses</a></dt>
							<dt><a href="">Alat Ukur/Analisis</dt>
							<dt><a href="">Berdasarkan Kegunaan</dt>
							<dt><a href="">Berdasarkan Lokasi</dt>
							<dt><a href="">Cari Alat</dt>
							<dt><a href="">Lab Analisis Kimia</dt>
							<dt><a href="">Lab Hama Pemukiman</dt>
							<dt><a href="">Lab Komposit dan Kayu</dt>
							<dt><a href="">Lab Mikrobiologi</dt>
							<dt><a href="">Tak Berkategori</dt>
							<dt><a href="">Worksop</dt>
						</dl>

					</section>
				</aside>

				<br	class="floating">
			</div>

			<footer id="footer">
				<p class="footer-text">Biomaterial Lipi Cibinong</p>
			</footer>
		</div>
	</body>
</html>