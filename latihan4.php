<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	$query = mysqli_query($con, "delete from mahasiswa where id = '".$_GET['id']."'");
	header("location:latihan1.php");

?>