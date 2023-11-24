<!DOCTYPE html>
<html>
<head>
    <title>Array Numerik</title> 
</head>
<body>
<h2>Contoh Penggunaan dan Penulisan Array dengan Indeks Numerik</h2>

<?php
$sayur = array("Tomat","Bawang","Kangkung","Bayam");
$urutan = array(1,2,3,4);

for($x=0; $x<count($sayur); $x++){
    echo "Sayuran ke ".$urutan[$x]." ". $sayur[$x]."<br>";
}


?>

</body>
</html>