<!DOCTYPE html>
<html>
<head>
	<title>If Else PHP Sederhana</title> 
</head>
<body>
	<form action=" " method="post"> 
<input type="text" name="nama" autocomplete="off" placeholder="Masukan Nama kamu"><br><br>
<input type="text" name="matkul" autocomplete="off" placeholder="Masukan Nama Mata Kuliah"><br><br>
<input type="text" name="nilai" autocomplete="off" placeholder="Masukan Nilai kamu"><br><br>

<input type="submit" value="Lihat Hasil"><br><br>
</form>
<?php 

$nama   = $_POST['nama'];
$matkul  = $_POST['matkul'];
$nilai  = $_POST['nilai'];

			if($nilai >= 80){
				$grade = "A";
				$keterangan ="Sangat Baik"; 
			}elseif($nilai >= 70 && $nilai < 80){
				$grade = "B";
				$keterangan =" Baik ";
			}elseif($nilai >= 60 && $nilai < 70){
				$grade = "C";
				$keterangan ="Cukup";
			}elseif($nilai >= 50 && $nilai < 60){
				$grade = "D";
				$keterangan ="Kurang";
			}else{
				$grade = "E";
				$keterangan ="Sangat Kurang";
			}	
	echo " Nama		   : $nama <br>";
	echo " Mata Kuliah : $matkul <br>";
	echo " Grade	   : $grade <br>";
	echo " Nilai anda $nilai $keterangan";
?>
 
</body>
</html>