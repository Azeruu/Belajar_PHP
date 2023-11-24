<!DOCTYPE html>
<html>
<head>
    <title>Tugas Switch Case PHP </title> 
    <style type="text/css">.upper { text-transform: uppercase; }</style>
</head>
<body>
    <form action=" " method="post"> 
<input type="text" name="nama" autocomplete="off" placeholder="Masukan Nama kamu"><br><br>
<input type="text" name="nim" autocomplete="off" placeholder="Masukan NIM kamu"><br><br>
<input type="text" name="matkul" autocomplete="off" placeholder="Masukan Nama Mata Kuliah"><br><br>
<input type="text" name="jmlhadir" autocomplete="off" placeholder="Masukan Jumlah Kehadiran"><br><br>
<input type="text" name="tugas" autocomplete="off" placeholder="Masukan Nilai Tugas kamu"><br><br>
<input type="text" name="uts" autocomplete="off" placeholder="Masukan Nilai UTS kamu"><br><br>
<input type="text" name="uas" autocomplete="off" placeholder="Masukan Nilai UAS kamu"><br><br>

<input type="submit" value="Lihat Hasil"><br><br>
</form>

<?php 
$nama   = $_POST['nama'];
$nim =$_POST['nim'];
$matkul  = $_POST['matkul'];
$hadir = $_POST['jmlhadir'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_hadir = $hadir*0.1;
$nilai_tugas = $tugas*0.2;
$nilai_uts = $uts*0.3;
$nilai_uas = $uas*0.4;

$nilaiakh = $nilai_hadir + $nilai_tugas + $nilai_uts + $nilai_uas;

switch ($nilaiakh) {
    case ($nilaiakh > 65):
    $keterangan = "LULUS";
    break;
    default:
    echo "TIDAK LULUS";
}
        if($nilaiakh >= 80){
				$grade = "A";
			}elseif($nilaiakh >= 70 && $nilaiakh < 80){
				$grade = "B";
			}elseif($nilaiakh >= 60 && $nilaiakh < 70){
				$grade = "C";
			}elseif($nilaiakh >= 50 && $nilaiakh < 60){
				$grade = "D";
			}else{
				$grade = "E";     
        }
    echo " <h2 align='center' class='upper' > NILAI AKADEMIK $matkul <br>";
    echo " <h2 align='center'> Nama      : $nama <br>";  
    echo " NIM  : $nim <br><br></h2>";

    echo " <p align='center'>Jumlah Kehadiran      : $hadir &emsp;&emsp;  Nilai kehadiran : $nilai_hadir ";
    echo " <p align='center'>NIlai Tugas       : $nilai_tugas &emsp;&emsp; Nilai UTS : $nilai_uts<br>";
    echo " <p align='center'>Nilai UAS     : $nilai_uas &emsp;&emsp; Nilai akhir : $nilaiakh<br>";
    echo " <p align='center'>Grade       : $grade &emsp;&emsp;&emsp; Keterangan     : $keterangan<br>";
    ?>
 
</body>
</html>