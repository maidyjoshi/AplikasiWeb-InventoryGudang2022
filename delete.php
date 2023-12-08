<?php 
	include "koneksi1.php";

	$id=$_GET['id'];
	$query = "DELETE FROM barang WHERE id='$id'";
	$result=mysqli_query($connect, $query);

header("location:tabelBarang.php");
?>