<?php
	include "koneksi1.php";

	$id = $_GET['id'];
	$nama = $_GET['nama'];
	$jumlah = $_GET['jumlah'];

	$query="UPDATE barang SET nama='$nama',jumlah='$jumlah' WHERE id='$id'";
	$result=mysqli_query($connect, $query);

	header("location:tabelBarang.php");
?>