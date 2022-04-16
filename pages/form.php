<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form • Liputan Sugeng</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../js/script.js"></script>
</head>
<body>
	<div class="header">
        <img src="../images/headerPg.png" width="40%" alt="LIPUTAN SUGENG" >  <!-- Edit gambar header-->
    </div>
      
      <div class="navbar">
        <a href="../index.html">HOME</a>
        <a href="about.html">ABOUT</a>
        <a href="form.php" class="active">BUKU TAMU</a>
      </div>
      
      
    <div class="main">
	<div class="running-text"><marquee>Selamat menjalankan ibadah puasa, Semoga kita senantiasa dilancarkan sampai datangnya hari kemenangan :D</marquee></div>

		<h2>Formulir</h2>
		<form action="" method="post">
			<div class="row">
				<label>Nama</label>
				<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Alamat</label>
				<input type="text" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Tempat Lahir</label>
				<input type="text" name="tempat" value="<?=isset($_POST['tempat']) ? $_POST['tempat'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Tanggal Lahir</label>
				<input type="date" name="lahir" value="<?=isset($_POST['lahir']) ? $_POST['lahir'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Email</label>
				<input type="email" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/ required>
			</div>
			<div class="row">
				<label>Jenis Kelamin</label>
				<div class="options">
					<?php
					$jenis_kelamin = array('L' => 'Laki-laki', 'P' => 'Perempuan');
					foreach ($jenis_kelamin as $kode => $detail) {
						$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
						echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
						</label>';
					}
					?>
				</div>
			</div>
			
			<div class="row">
				<input type="submit" name="submit" value="Simpan"/>
			</div>
		</form>
		<?php
		if (isset($_POST['submit'])) {
			echo '<h2>Berikut data kamu:</h2>';
			echo '<ul>';
			echo '<li>Nama: ' . $_POST['nama'] . '</li>';
			echo '<li>Alamat: ' . $_POST['alamat'] . '</li>';
			echo '<li>Tempat Lahir: ' . $_POST['tempat'] . '</li>';
			echo '<li>Tanggal Lahir: ' . $_POST['lahir'] . '</li>';
			echo '<li>Email: ' . $_POST['email'] . '</li>';
			echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
			echo '</ul>';
		}?>	
    </div>

	<div class="footer">
        <b>&#169; 2022 Dasar Website</b>
    </div>   
</body>
</html>