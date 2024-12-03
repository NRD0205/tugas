<?php
require 'function.php';
// check apakah tombol submit sudah ditekan atau belum

$id = $_GET["id"];

    if (hapus ($id)> 0) {
        echo "
        <script>
        alert(' data Berhasil Di Hapus!');
        document.location.href = 'index.php';
        </script>       
        ";
    } else {
        echo "
        <script>
        alert(' data Gagagl Di Hapus!');
        document.location.href = 'index.php';
        </script>
        ";
    }


?>

