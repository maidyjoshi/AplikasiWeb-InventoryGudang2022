<?php
include "nav.php";
?>

<!-- Isi dari menu -->

<div class="container" style="height: 100vh;">


	<table>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Jumlah (box)</th>
			<th>Aksi</th>

		</tr>
		<?php
        include "koneksi1.php";

        $query = "SELECT * FROM barang";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
	        while ($row = mysqli_fetch_array($result)) {
        ?>
		<tr>
			<td>
				<?php echo $row["id"] ?>
			</td>
			<td>
				<?php echo $row["nama"] ?>
			</td>
			<td>
				<?php echo $row["jumlah"] ?>
			</td>

			<td>
				<a href="edit.php?id=<?php echo $row['id']; ?>">
					Edit</a>
				<a href="delete.php?id=<?php echo $row['id']; ?>">
					Hapus</a>
			</td>
		</tr>
		<?php
	        }
        } else {
	        echo "Barang Kosong";
        }
        ?>
		</tr>

	</table>

	<div class="container">
		<div class="mt-2">
			<div class="mb-3 d-md-flex justify-content-end">
				<a class="btn btn-primary col-1" href="add.php" role="button">Tambah</a>
			</div>
		</div>
	</div>



</div>








<?php
include "navUnder.php";
?>