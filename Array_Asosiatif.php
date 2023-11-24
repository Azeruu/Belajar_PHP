<!DOCTYPE html>
<html>
<head>
    <title>Array Asosiatif</title> 
</head>
<body>
<h2>Contoh Penggunaan dan Penulisan Array Asosiatif</h2>

<?php
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