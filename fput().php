<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan fputs()</title> 
</head>
<body>
<h2>Contoh Sederhana Penggunaan fputs()</h2>

<?php 
$file = fopen("fput.txt", "a");
$data1 = "Nama : Reza
";
$data2 = "NIM : 191011401910 
";
$data3 = "Kelas : 06TPLP015 
";



fputs($file, $data1);
    echo " <br> <b>'$data1'</b> berhasil diinput";
fputs($file, $data2);
    echo " <br> <b>'$data2'</b> berhasil diinput";
fputs($file, $data3);
    echo " <br> <b>'$data3'</b> berhasil diinput";
fclose($file);
?>
<p>File dengan Nama 
<?php
echo "<b>fput().txt</b> ";
?>
Telah berhasil dibuat</p>

</p>
</body>
</html>