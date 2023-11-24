<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan fputs()</title> 
</head>
<body>
<h2>Contoh Sederhana Penggunaan fputs()</h2>
<form action=" " method="post"> 
<input type="text" name="kalimat" autocomplete="off" placeholder="Masukan kata/kalimat"><br>

<input type="submit" value="Tambahkan"><br><br>
</form>
<?php
$kalimat = $_POST['kalimat'];

$file = fopen("fputModeA.txt", "a");
fputs($file, $kalimat);
    echo " <br> <b>'$kalimat'</b> berhasil diinput";
fclose($file);
?>
<p>File dengan Nama 
<?php
echo "<b>fputModeA().txt</b> ";
?>
Telah berhasil dibuat</p>

</p>
</body>
</html>