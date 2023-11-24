<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan fpget()</title> 
</head>
<body>
<h2>Contoh Sederhana Penggunaan fget()</h2>

<?php
$file = fopen("Identitas.txt","r");
while(! feof($file)){
    echo fgets($file)."<br>";
}
fclose($file);
?>

</body>
</html>