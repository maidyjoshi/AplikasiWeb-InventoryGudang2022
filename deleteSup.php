<?php 
	include "koneksi1.php";

	$id=$_GET['id'];
	$query = "DELETE FROM supplier WHERE idSupplier='$id'";
	$result=mysqli_query($connect, $query);

    if($result){
        echo "berhasil";
    } else {
        echo "gagal".mysqli_error($connect);
    }
    

?>