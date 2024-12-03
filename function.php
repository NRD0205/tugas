<?php
$conn = mysqli_connect ("localhost", "root", "","laundri");

function query ($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoch($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn ;

    $Nama = htmlspecialchars($data["nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Pesanan = htmlspecialchars($data["pesanan"]);
    $Kilo = htmlspecialchars($data["ilo"]);

    $query ="INSERT INTO tb_laundri VALUES
    ('','$Nama','$Email','$Pesanan','$Kilo')";

    mysqli_query ($conn, $query);
    return mysqli_affected_rows($conn);
}