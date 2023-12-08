<?php
    include "koneksi1.php";
    include "nav.php";

    ?>
<form action="adding.php" method="GET">
    <div class="container mt-5">
		<h2 class="text-center">Tambah Barang</h2>

    <div class="form-floating mb-3">
            <input name="nama" type="nama" class="form-control" id="floatingInput" placeholder="Nama Barang">
                <label for="floatingInput">Nama Barang</label>
    </div>
    <div class="form-floating">
            <input name="jumlah" type="jumlah" class="form-control" id="floatingPassword" placeholder="Jumlah Barang">
                <label for="floatingPassword">Jumlah Barang</label>
    </div>

    <div class="mt-2">
    <div class="mb-3 d-md-flex">
            <input type="submit" class="btn btn-primary col-1" value="Tambahkan">
    </div>
    </div>
    </div>

</form>

<?php
include "navUnder.php";
?>