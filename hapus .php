<?php
require 'function.php';

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
        alert(' data Gagal Di Hapus!');
        document.location.href = 'index.php';
        </script>
        ";
    }


?>

