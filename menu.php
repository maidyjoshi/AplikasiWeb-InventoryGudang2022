<?php
 include "nav.php";
 include "koneksi1.php";

 $id = $_SESSION['id'];

 $sql  = "SELECT nama FROM pegawai WHERE id = '$id'";
 $result = mysqli_query($connect, $sql);
 $row = mysqli_fetch_array($result)


// if(mysqli_query($connect,$sql)){
//     echo "Tabel Member berhasil dibuat";
// } else{
//     echo "Tabel Member gagal dibuat <br>" . mysqli_error($connect);
// }
?>
<body>
<div class="container">

    <div class="p-5 mt-4 mb-4 text-bg-dark rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang <?php echo $row["nama"] ?></h1>
        <p class="col-md-8 fs-4">Ini adalah Pusat Gudang Sejati Damai, yang melakukan semua jenis barang untuk melakukan sebuah penyimpanan.<br> 
                                 Selamat bekerja bagi para pegawai Gudang Sejati Damai. Silahkan melakukan penambahan barang serta pengiriman.</p>
                                 <button class="btn btn-primary btn-lg" type="button">Ok</button>
      </div>
    </div>
    <div id="flip">Lihat Selengkapnya...</div>
    
	<div id="kotak2" style="display: none;">Gallery Kami: <br>
  <div class="row row-cols-3">
                <img src="img/company.jpg" class="img-thumbnail">
                <img src="img/bos.png" class="img-thumbnail">
                <img src="img/team.jpg" class="img-thumbnail">
  </div>
</div>
</body>


<?php
 include "navUnder.php";
?>