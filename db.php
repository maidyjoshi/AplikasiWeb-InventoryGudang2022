<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($namaHost, $username, $password);

$sql  = "CREATE DATABASE inventory";
if(mysqli_query($connect,$sql)){
    echo "Database berhasil dibuat";
} else{
    echo "Database gagal dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);
?>