<!DOCTYPE html>
<html>
<head>
    <title>Tugas Terstruktur Pertemuan 4 </title> 
</head>
<body>
    <form action=" " method="post"> 
<p>Nilai Awal : <input type="text" name="nilai1" autocomplete="off" placeholder="Nilai Awal"><br></p>
<p>Nilai Akhir : <input type="text" name="nilai2" autocomplete="off" placeholder="Nilai Akhir"><br></p>

<input type="submit" value="Hitung"><br><br>
</form>

<p>Deret Bilangan :
<?php 
$nilai1   = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$b;
$jmlnil=0;
$hitung=0;
$baris=0;
for($a=$nilai1; $a<= $nilai2 ; $a++) { 
    if($a%3==0){
        $b=$a;
        if ($b%2==1) {
            $hitung=$hitung+1;
            $jmlnil+=$b;
            $baris=$a;
            echo "$baris,";   
        }
    }
            
}
echo "<p>Jumlah Bilangan     :$hitung</p<br>";
echo "<p>Jumlah Nilai Bilangan     : 9 + 15 + 21 + 27 = $jmlnil</p>";
    
?>
</p>
</body>
</html>