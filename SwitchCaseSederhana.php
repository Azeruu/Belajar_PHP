<!DOCTYPE html>
<html>
<head>
	<title>Switch Case PHP Sederhana</title> 
</head>
<body>
	<form action="SwitchCaseSederhana.php" method="post"> 
<input type="text" name="nama" autocomplete="off" placeholder="Masukan Nama kamu"><br><br>
<input type="text" name="matkul" autocomplete="off" placeholder="Masukan Nama Mata Kuliah"><br><br>
<input type="text" name="nilai" autocomplete="off" placeholder="Masukan Nilai kamu"><br><br>

<input type="submit" value="Lihat Hasil"><br><br>
</form>
<?php 
$nama   = $_POST['nama'];
$matkul  = $_POST['matkul'];
$nilai  = $_POST['nilai'];


		switch ($nilai) {
			case ($nilai >= 80):
			$grade = "A";
			$keterangan ="Sangat Baik"; 
			break;
			case ($nilai >= 70 && $nilai < 80):
			$grade = "B";
			$keterangan =" Baik ";
			break;
			case ($nilai >= 60 && $nilai < 70):
			$grade = "C";
			$keterangan ="Cukup";
			break;
			case ($nilai >= 50 && $nilai < 60):
			$grade = "D";
			$keterangan ="Kurang";
			break;
			case ($nilai <50):
			$grade = "E";
			$keterangan ="Sangat Kurang";
			break;		
		}
	echo " Nama		   : $nama <br>";
	echo " Mata Kuliah : $matkul <br>";
	echo " Grade	   : $grade <br>";
	echo " Nilai anda $nilai $keterangan";
	?>
 
</body>
</html>