<?php
    include "koneksi1.php";
    include "nav.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM barang WHERE id='$id'";
    $result = mysqli_query($connect, $query);
?>

	<div class="container mt-5">
		<h2 class="text-center">Edit Barang</h2>
	<form action="editing.php" method="GET">

	
<?php
    while ($row = mysqli_fetch_array($result)) {
?>

	<tr>
		<td> <input hidden type="text" name="id" value="<?php echo $id; ?>">
	</tr>

	<div class="form-floating mb-3">
		<input name="nama" type="nama" class="form-control" id="floatingInput" placeholder="Nama Barang" value="<?php echo $row['nama']; ?>">
		<label for="floatingInput">Nama Barang</label>
	</div>

	<div class="form-floating">
		<input name="jumlah" type="jumlah" class="form-control" id="floatingPassword" placeholder="Jumlah Barang" value="<?php echo $row['jumlah']; ?>">
		<label for="floatingPassword">Jumlah Barang</label>
	</div>

	<div class="mt-2">
	<div class="mb-3 d-md-flex">
		<input type="submit" class="btn btn-primary col-1" value="Perbarui">
	</div>
	</div>
	</div>

<?php
}
?>

	</form>
	
<?php
include "navUnder.php";
?>