<?php

include "koneksi1.php";

$sql  = "CREATE TABLE pegawai(
    id INT PRIMARY KEY,
    passwords VARCHAR(30) NOT NULL,
    nama VARCHAR(50) NOT NULL  
)";

if(mysqli_query($connect,$sql)){
    echo "Tabel Member berhasil dibuat";
} else{
    echo "Tabel Member gagal dibuat <br>" . mysqli_error($connect);
}


mysqli_close($connect);
?>