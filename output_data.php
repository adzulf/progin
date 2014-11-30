<!DOCTYPE html>
<html>
<head>
	<title>Tampilkan Data</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3>Bimbingan Skripsi Online</h3>
		<ul class="nav nav-tabs">
				<li><a href="form.html">Registrasi</a></li>
				<li class="active"><a href="#">Daftar Dosen Pembimbing</a></li>
		</ul>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3>Daftar Dosen Pembimbing</h3>
			</div>
			<div class="panel-body">
			<?php
			$fs = fopen('save.txt','r') or die("Tidak dapat mebuka file");
				echo "<table class='table table-condensed table-bordered table-striped'> 
					<tr>
						<th>Nama Lengkap</th>
						<th>NIDN</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>E-mail</th>
						<th>Bidang Keahlian</th>
						<th>Kode Bimbingan</th>
						<th>Usename</th>
						<th>Password</th>
					</tr>";
				while (list($nama, $nidn, $jkel, $tempat_lahir, $tgl_lahir, $alamat, $telp, $email, $bkea, $kode_bimbingan, $user, $pass) = fgetcsv($fs,1024,',')){
				echo "<tr>".
						"<td>".$nama."</td>".
						"<td>".$nidn."</td>".
						"<td>".$jkel."</td>".
						"<td>".$tempat_lahir."</td>".
						"<td>".$tgl_lahir."</td>".
						"<td>".$alamat."</td>".
						"<td>".$telp."</td>".
						"<td>".$email."</td>".
						"<td>".$bkea."</td>".
						"<td>".$kode_bimbingan."</td>".
						"<td>".$user."</td>".
						"<td>".$pass."</td>".
					"</tr>";
				}
				echo "</table>";
			?>
			</div>
		</div>
	</div>
</body>
</html>