<?php
require_once "config/database.php";
if (isset($_GET['id'])) {
	$nis = $_GET['id'];
	$query = mysqli_query($db, "DELETE FROM is_siswa WHERE nis='$nis'");
	if ($query) {
		header('location: index.php?alert=4');
	} else {
		header('location: index.php?alert=1');
	}	
}							
?>