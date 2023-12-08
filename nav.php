<?php

include "koneksi1.php";

    session_start();

    if(isset($_SESSION['id'])) {
    
    } else {
    header("location:indeks.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Nav Bar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="styleSlide.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleNav.css?v=<?= time() ?>">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.2.js" 
                integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script>
		$(document).ready(function() {
			$("#flip").click(function() {
				$("#kotak2").slideToggle("slow");
			});
		});
	</script>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="menu.php">
                <img href="menu.php" src="img/logo.png" align="left" width="60" height="60">
            </a>


        </div>

        <ul>
            <li><a href="tabelUser.php">User</a></li>
            <h3>||</h3>
            <li><a href="tabelBarang.php">Daftar Barang</a></li>
            <h3>||</h3>
            <li><a href="tableSupplier.php">Supplier</a></li>
            <h3>||</h3>
            <span class="logout">
            <li ><a href="akulogout.php">Logout</a></li>    
            </span>
            

        </ul>

        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>