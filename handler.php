<!DOCTYPE html>
<html>
<head>
  <title>simple_light - contact us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="#">Bimbingan Skripsi<span class="logo_colour">Online</span></a></h1>
          <h2>Simple. Easy. Interesting.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="#">Home</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Materi</a></li>
          <li class="selected"><a href="#">Registrasi</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      </div>
	<div class="container">
		<h3>REGISTRASI DOSEN SUKSES!!!</h3>
		<ul class="nav nav-tabs">
				<li><a href="output_data.php">Daftar Dosen Pembimbing</a></li>
		</ul>
		<?php
			$nama = $_POST['nama'];
			$nidn = $_POST['nidn'];	
			$jkel = $_POST['jkel'];
			$tempat_lahir = $_POST['tempat_lahir'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$alamat = $_POST['alamat'];
			$telp = $_POST['telp'];
			$email = $_POST['email'];
			$bkea = $_POST['bkea'];
			$kode_bimbingan = $_POST['kode_bimbingan'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			$outputstring = $nama.",".$nidn.",".$jkel.",".$tempat_lahir.",".$tgl_lahir.","
			.$alamat.",".$telp.",".$email.",".$bkea.",".$kode_bimbingan.",".$user.",".$pass."\n";

			$fh = fopen('save.txt', 'a+') or die("Tidak dapat membuka file");

			fwrite($fh, $outputstring, strlen($outputstring));
			fclose($fh);
			echo "
			<div class='well well=lg'>
					<h1>Data tersimpan</h1>
			</div>";
			?>
</body>
</html>