<?php
include "koneksi1.php";

$a = $_GET["id"];
$b = $_GET["nama"];
$c = $_GET["telepon"];
$d = $_GET["alamat"];

$sql = "INSERT INTO supplier (nama, telepon, alamat) VALUES ('$b', '$c', '$d')";
$query = mysqli_query($connect, $sql);

header("location:tableSupplier.php");

?>
