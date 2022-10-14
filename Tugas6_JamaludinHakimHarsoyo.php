<!DOCTYPE html>
<!-- Jamaludin Hakim Harsoyo -->

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style6.css" rel="stylesheet">
    <title>Kalkulator Nilai</title>
</head>


<body>
    <header>
        <div id="header">
            <p style="font-weight:bold;margin-left:2rem;font-size:larger;">NILAI PESERTA LATIHAN</p>
        </div>
    </header>
    <div id="index">
        <h3>=================Input Nilai=================</h3>
        <form action="" method="POST" style="margin-left:2rem;">
            <p>Nilai Praktik :</p>
            <input type="number" name="praktik" style="width:20%;">
            <p>Nilai Pilihan Ganda :</p>
            <input type="number" name="pg" style="width:20%;">
            <p>Nilai Sikap :</p>
            <input type="number" name="sikap" style="width:20%;">
            <p>Nilai Kehadiran :</p>
            <input type="number" name="kehadiran" style="width:20%;"><br><br><br>
            <input type="submit" name="submit" value="Hitung">
        </form>

        <br>
        <h3>===========================================</h3>
        <br>
        <p style="margin-left: 2rem;">
            <?php
    if(isset($_POST['submit'])){
    $Praktik = $_POST['praktik'];
    $PilihanGanda = $_POST['pg'];
    $Sikap = $_POST['sikap'];
    $Kehadiran = $_POST['kehadiran'];
    $ratarata = $Praktik + $PilihanGanda + $Sikap + $Kehadiran;
    $Hasil = $ratarata/4;
    echo "Hasil Rata-Rata Nilai : "."<strong>".$Hasil."</strong>";
    }
?>
        </p>
    </div>



</body>

</html>