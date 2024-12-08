<?php
$conn = mysqli_connect ("localhost", "root", "", "laundri");

function query ($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn  ;


    $Nama = htmlspecialchars($data["nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Pesanan =  htmlspecialchars($data["Pesanan"]);
    $Kilo = htmlspecialchars($data["Kilo"]);

            $query = "INSERT INTO tb_laundri
                VALUES
                ('', '$Nama', '$Email', '$Pesanan', '$Kilo')";



                mysqli_query($conn, $query);
                return mysqli_affected_rows($conn);
   
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_laundri WHERE id = $id");

    return mysqli_affected_rows($conn);


}

function update($data){
    global $conn ;

    $id = $data["id"];
    $Nama = htmlspecialchars ($data["nama"]);
    $Email = htmlspecialchars ($data["Email"]);
    $Pesanan =  htmlspecialchars ($data["Pesanan"]);
    $Kilo = htmlspecialchars ($data["Kilo"]);


    $query = "UPDATE tb_laundri SET
    nama = '$Nama',
    Email = '$Email',
    Pesanan = '$Pesanan',
    Kilo = '$Kilo'
    WHERE id = '$id'";






mysqli_query ($conn, $query);
return mysqli_affected_rows ($conn);
       
}


?>

    