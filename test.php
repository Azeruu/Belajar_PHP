<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan Array</title> 
</head>
<body>
<h2 align="center">Contoh Penggunaan Array<br>
Untuk Menghitung Luas Segitiga</h2>
<form action="" method="post">
    <table>
        <tr>
            <td>Alas</td><td>:</td>
            <td><input type="text" name="alas1" autocomplete="off" placeholder="Masukan panjang alas"><br></td>
            <td><input type="text" name="alas2" autocomplete="off" placeholder="Masukan panjang alas"><br></td>
            <td><input type="text" name="alas3" autocomplete="off" placeholder="Masukan panjang alas"><br></td>
            <td><input type="text" name="alas4" autocomplete="off" placeholder="Masukan panjang alas"><br></td>
            <td><input type="text" name="alas5" autocomplete="off" placeholder="Masukan panjang alas"><br></td>
        </tr>
        <tr>
            <td>Tinggi</td><td>:</td>
            <td><input type="text" name="tinggi1" autocomplete="off" placeholder="Masukan tinggi segitiga"><br></td>
            <td><input type="text" name="tinggi2" autocomplete="off" placeholder="Masukan tinggi segitiga"><br></td>
            <td><input type="text" name="tinggi3" autocomplete="off" placeholder="Masukan tinggi segitiga"><br></td>
            <td><input type="text" name="tinggi4" autocomplete="off" placeholder="Masukan tinggi segitiga"><br></td>
            <td><input type="text" name="tinggi5" autocomplete="off" placeholder="Masukan tinggi segitiga"><br></td>
        </tr>
        <tr>
            <td><td><td><input type="submit" name="hitung" value="Hitung"><br><br></td></td></td>
        </tr>
    </table>
</form>
<br><p> Hasil </p>
<table border="1" width="450px">
        <tr>
            <td width="50px">No.</td><td width="150px">Alas</td><td width="150px">Tinggi</td><td width="150px">Luas Alas</td>
</table>
<?php
if(isset($_POST['hitung'])){
        $alas1 = $_POST['alas1'];
        $alas2 = $_POST['alas2'];
        $alas3 = $_POST['alas3'];
        $alas4 = $_POST['alas4'];
        $alas5 = $_POST['alas5'];

        $tinggi1 = $_POST['tinggi1'];
        $tinggi2 = $_POST['tinggi2'];
        $tinggi3 = $_POST['tinggi3'];       
        $tinggi4 = $_POST['tinggi4'];
        $tinggi5 = $_POST['tinggi5'];
}

$alas=[$alas1,$alas2,$alas3,$alas4,$alas5];
$tinggi=[ $tinggi1,$tinggi2,$tinggi3,$tinggi4,$tinggi5];

for($x=0; $x<count($alas); $x++){
$hasil=0.5*$alas[$x]*$tinggi[$x];

?>
<table border="1" width="450px">
    <tr><td width="50px"><?php echo $x; ?></td><td width="150px"><?php echo $alas[$x]; ?></td><td width="150px"><?php echo $tinggi[$x]; ?></td><td width="150px"><?php echo $hasil; ?></td></tr>
</table>

<?php
}
echo "Reza";
echo "191011401910";
echo "06TPLP015";

echo "Implementasi Array";
?>

</body>
</html>