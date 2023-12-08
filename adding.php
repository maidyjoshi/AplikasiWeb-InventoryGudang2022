<?php
include "koneksi1.php";

$x = $_GET["id"];
$y = $_GET["nama"];
$z = $_GET["jumlah"];


$sql = "INSERT INTO barang (id, nama, jumlah) VALUES ('$x','$y', '$z')";
$query = mysqli_query($connect, $sql);

header("location:tabelBarang.php");

?>
