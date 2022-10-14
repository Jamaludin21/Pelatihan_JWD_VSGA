<!DOCTYPE html>
<!-- Jamaludin Hakim Harsoyo -->

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Input Angka Output Bintang</title>
</head>

<body>
    <h3>=================Bintang Inputan=================</h3>
    <form action="" method="POST">
        <p>Masukkan Angka :</p>
        <input type="number" name="bintang"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <p>
        Bintang yang ditampilkan :
    </p>
    <?php 
        if(isset($_POST['submit'])){
            $star = $_POST['bintang'];

            for ($a = 0; $a <= $star; $a++) { 
                for ($b = 0; $b <= $a; $b++) { 
                    echo "*";
                }
                echo "<br>";
            }
        }
?>

</body>

</html>