<!DOCTYPE html>
<!-- Jamaludin Hakim Harsoyo -->

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Deret Bilangan Ganjil & Genap</title>
</head>

<body>
    <h3>=================Deret Bilangan Ganjil & Genap 0-100=================</h3>
    <p style="margin-left:15rem;">
        <?php 
for($i = 0;$i <= 100;$i++){
    if($i%2==1){
        echo $i." adalah Bilangan <strong>Ganjil</strong> "."<br><br>";
    } else {
        echo $i." adalah Bilangan <strong>Genap</strong> "."<br><br>";
    }
}
?>
    </p>
</body>

</html>