<html>

<head>

    <style>
    .form {
        border: 1px solid #DD2727;
        width: 35%;
        display: flex;
        justify-content: center;
        height: 50%;
    }
    </style>

<body>
    <h2 style="text-align:center;">FORM BIODATA</h2>
    <div class="form" style="align-items:center;">
        <form method="post" action="Tugas7(action)_JamaludinHakimHarsoyo.php" style="margin:2rem;">
            Nama : <input type="text" name="nama"><br><br>
            Gender : <input type="radio" value="Pria" name="gender">Laki-Laki
            <input type="radio" value="Perempuan" name="gender">Wanita<br><br>
            Hobby : <input type="checkbox" name="hobby[]" value="game">Game
            <input type="checkbox" name="hobby[]" value="nonton">Nonton
            <input type="checkbox" name="hobby[]" value="olahraga">Olahraga<br><br>
            Pendidikan : <select name="pendidikan">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="KULIAH">Kuliah</option>
            </select><br><br>
            Alamat :<br><textarea rows="3" cols="30" name="alamat"></textarea><br><br>
            <input type="submit" value="simpan" name="submit">
        </form>
    </div>
</body>
</head>

</html>