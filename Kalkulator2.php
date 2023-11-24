<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP</title> 
</head>
<body>
<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil1;
			break;
			case 'pangkat':
				$hasil = pow($bil1,$bil2);
			break;
			case 'mod':
				$hasil = $bil1%$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 align="center" class="judul">Kalkulator Sederhana</h2>
		<h2 align="center"class="judul">Dengan PHP</h2>
		<h4 align="left" class="judul">Nama : Reza <br> NIM : 191011401910 <br> Kelas : 06TPLP015</h4>
		<form method="post" action="Kalkulator2.php">
			<p>&emsp;&emsp;&emsp;&emsp;Nilai I &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Nilai II</p>		
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
				<option value="pangkat">^</option>
				<option value="mod">%</option>
			</select>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua">
			<input type="submit" name="hitung" value="Submit" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<h4>Hasil</h4><b>
			<input type="text" value="0" class="bil"></b>
		<?php } ?>			
	</div>
</body>
</html>