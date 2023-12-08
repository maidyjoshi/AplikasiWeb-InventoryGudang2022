<?php
    include "nav.php";
?>

<!-- Isi dari menu -->

<div class="container" style="height: 100vh;">
	


<table>
		<tr>
			<th>ID</th>
			<th>Nama</th>

		</tr>
		<?php
			include "koneksi1.php";

			$query="SELECT * FROM pegawai";
			$result=mysqli_query($connect, $query);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result))
			{
			?>
		
		<tr>
			<td> <?php echo $row["id"] ?> </td>
			<td> <?php echo $row["nama"] ?> </td>
		</tr>
		<?php
				}
			}
			else {
				echo "User Kosong";	
			}
		 ?>
		</tr>
	</table>

		</div>
<?php
    include "navUnder.php";
?>