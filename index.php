<!DOCTYPE html>
<html>
	<head>
	<?php
		include 'koneksi.php';
	?>
		<title>SIGAP-BIOMAT</title>
		<!-- Bootstrap -->
		<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/style.css">

		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
      	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>
	<body>
		<div id="site-container">
			<header id="header">
				
			</header>

			<nav id="menu">
				<ul class="nav nav-pills" role="tablist">
					<li><a href="index.php?webpro=daftaralat">Daftar Alat</a></li>
					<li><a href="index.php?webpro=peminjaman">Prosedur Peminjaman</a></li>
					<li><a href="index.php?webpro=view">Ketentuan Penggunaan</a></li>
					<li><a href="logout.php">Kontak</a></li>
					
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
								include"saveartikel.php";
								break;
							case 'view':
								include"view.php";
								break;
							case 'peminjaman':
								include"peminjaman.php";
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


			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   		 	<script src="../SIGAP/bootstrap-3.3.7-dist/jquery-3.2.1.min.js"></script>
    	 	<!-- Include all compiled plugins (below), or include individual files as needed -->
    		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

