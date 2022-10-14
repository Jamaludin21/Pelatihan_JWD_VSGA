<?php 
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$hobby = $_POST["hobby"];
$pendidikan = $_POST["pendidikan"];
$alamat = $_POST["alamat"];

echo "<h2>Biodata Anda</h2>";
echo "Nama     : $nama <br>";
echo "Gender   : $gender <br>";
echo "Hobby    : ";
foreach ($hobby as $key){
    echo $key;
}
echo "<br>Pendidikan   : $pendidikan <br>";
echo "Alamat   : $alamat";
?>