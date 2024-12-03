<?php
require 'function.php';
// check apakah tombol submit sudah ditekan atau belum

$id = $_GET["id"];

$ubahDB = query ("select * from db_siswa where id = $id")[0];
if (isset($_POST["submit"] )) {
    if (update ($_POST)> 0) {
        echo "
        <script>
        alert(' data BERHASIL DI UPDATE');
        document.location.href = 'index.php';
        </script>       
        ";
    } else {
        echo "
        <script>
        alert(' data GAGAL DI UPDATE');
        document.location.href = 'index.php';
        </script>
        ";
    }
}

?>





<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <style>
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Formulir Pendaftaran</h1>
    <form method="post">
        <input type="hidden" name="id" value ="<?= $ubahDB ["id"]; ?>">
        <label for="nama">nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nisn">nisn:</label>
        <input type="text" id="nisn" name="nisn" required><br>
       
        <label for="email">email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="jurusan">jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>
       <label for="foto">foto</label>
       <input type="file" id="foto" name ="foto" >
        <br>
        <br>

        <input type="submit" name="submit" value="Daftar">
    </form>
</body>
</html>

