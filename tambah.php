<?php
require 'function.php';
// check apakah tombol submit sudah ditekan atau belum

if (isset($_POST["submit"] )) {
    if (tambah ($_POST)> 0) {
        echo "
        <script>
        alert(' data BERHASIL');
        document.location.href = 'index.php';
        </script>       
        ";
    } else {
        echo "
        <script>
        alert(' data GAGAL');
        document.location.href = 'index.php';
        </script>
        ";
    }
}

?>





<!DOCTYPE html>
<html>
<head>
    <title>pesanan</title>
    <style>
        body {
            background:linear-gradient(
          rgba(0, 0, 0, 0.5),  /* Warna hitam dengan transparansi 0.5 */
          rgba(0, 0, 0, 0.5)
        ),
        url('gambar 1');
        }
        form {
            background-color: white;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }

        label {
            display: block;
            margin-bottom: 3px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width:85%;
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
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 >Formulir Pesanan</h1>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="Email">Email:</label>
        <input type="Email" id="Email" name="Email" required><br>
       
        <label for="Pesanan">Pesanan:</label>
        <input type="text" id="text" name="text" required><br>
        <label for="Kilo">Kilo:</label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>

        <br>
        <br>

        <input type="submit" name="submit" value="Daftar">
    </form>
</body>
</html>