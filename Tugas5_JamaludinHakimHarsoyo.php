<!DOCTYPE html>
<!-- Jamaludin Hakim Harsoyo -->

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perhitungan Matematika</title>
</head>

<body>
    <h3>=================Matematika=================</h3>
    <form action="" method="POST">
        <p>Masukkan Angka 1 :</p>
        <input type="number" name="angka1">
        <p>Masukkan Angka 2 :</p>
        <input type="number" name="angka2"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <h3>===========================================</h3>
    <br>

    <?php
    if(isset($_POST['submit'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $penjumlahan = $angka1 + $angka2;
    $pengurangan = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;
    echo "Hasil Penjumlahan : "."<strong>".$penjumlahan."</strong>"."<br><br>";
    echo "Hasil Pengurangan : "."<strong>".$pengurangan."</strong>"."<br><br>";
    echo "Hasil Perkalian : "."<strong>".$perkalian."</strong>"."<br><br>";
    echo "Hasil Pembagian : "."<strong>".$pembagian."</strong>"."<br><br>";
    }
?>

</body>

</html>