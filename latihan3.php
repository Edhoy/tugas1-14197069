<h1>Edit Mahasiswa</h1>
<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	if (isset($_POST['proses'])) {
		$query = mysqli_query($con, "update mahasiswa set npm = '".$_POST['npm']."', nama = '".$_POST['nama']."' where id = '".$_GET['id']."'
		");
		header("location:latihan1.php");
	}

	$query = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id = '".$_GET['id']."'");
	while ($data = mysqli_fetch_array($query)) {

?>

<form action="" method="POST">
	<input type="text" name="npm" value="<?php echo $data['npm'] ?>">
	<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
	<input type="submit" name="proses" value="Simpan">
</form>

<?php } ?>