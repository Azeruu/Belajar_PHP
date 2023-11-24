<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan Array</title> 
</head>
<body>
<h2>Contoh Penggunaan Array</h2>

<?php
$urutan = [
    "1","2","3","4"
];
$identitas =[
    "Nama"=>"Reza",
    "NIM"=>"191011401910",
    "Kelas"=>"06TPLP015",
    "Alamat"=>"Cisoka, Kab.Tangerang"
];
foreach ($identitas as $identitas => $value) {
    echo $identitas. " : ". $value."<br>";
}


?>

</body>
</html>