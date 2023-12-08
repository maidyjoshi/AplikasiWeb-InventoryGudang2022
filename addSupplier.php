<?php
    include "koneksi1.php";
    include "nav.php";

    ?>
<form action="addingSupplier.php" method="GET">
    <div class="container mt-5">
		<h2 class="text-center">Input Supplier</h2>

    <div class="form-floating mb-3">
            <input name="nama" type="nama" class="form-control" id="floatingInput" placeholder="Nama Supplier">
                <label for="floatingInput">Masukkan Nama Supplier</label>
    </div>
    <div class="form-floating mb-3">
            <input name="telepon" type="telepon" class="form-control" id="floatingPassword" placeholder="Telepon">
                <label for="floatingInput">Masukkan No. Telepon</label>
    </div>
    <div class="form-floating">
            <input name="alamat" type="alamat" class="form-control" id="floatingPassword" placeholder="alamat">
                <label for="floatingInput">Masukkan Alamat</label>
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