<?php
	require_once('../../config/config.php');
	
	 // echo $_GET['idbinhluan'];
	 // echo $_POST['tinhtrang'];

	if(isset($_POST['suabinhluan'])){
		$tinhtrang = $_POST['tinhtrang'];
		$sql_update = "UPDATE tbl_binhluan SET tinhtrang='".$tinhtrang."'WHERE id_binhluan='$_GET[idbinhluan]'";
		 $query = mysqli_query($mysqli, $sql_update);
		 header('location: ../../index.php?action=quanlybinhluan&query=lietke');

	}else{
	 	$sql_delete = "DELETE FROM tbl_binhluan WHERE id_binhluan = '$_GET[idbinhluan]'";
	 	$query = mysqli_query($mysqli, $sql_delete);
	 	header('location: ../../index.php?action=quanlybinhluan&query=lietke');

	}
	
 ?>