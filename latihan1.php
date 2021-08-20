<h1>Daftar Mahasiswa</h1>

<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	echo "<a href='latihan2.php'>Tambah</a> <br>";
	$query = mysqli_query($con, "select * from mahasiswa");
	while ($data = mysqli_fetch_array($query)) {
		echo $data['npm'].' ';
		echo $data['nama'].' ';
		echo "<a href='latihan3.php?id=".$data['id']."'>Edit</a> | <a href='latihan4.php?id=".$data['id']."'>Hapus</a>";
		echo '<br>';
	}

?>