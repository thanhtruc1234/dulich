

	<?php
	if(isset($_GET['action']) && $_GET['query'])
	{
		$tam = $_GET['action'];
		$query = $_GET['query'];
	}else {
		$tam = '';
		$query = '';
	}
	if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
		require_once('modules/quanlydanhmucsp/them.php');
		require_once('modules/quanlydanhmucsp/lietke.php');
	}elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
		require_once('modules/quanlydanhmucsp/sua.php');
	}elseif ($tam == 'quanlysp' && $query == 'them') {
		require_once('modules/quanlysp/them.php');
		require_once('modules/quanlysp/lietke.php');
	}elseif ($tam == 'quanlysp' && $query == 'sua') {
		require_once('modules/quanlysp/sua.php');
	}
	elseif ($tam == 'quanlyslide' && $query == 'them') {
		require_once('modules/quanlyslide/them.php');
		require_once('modules/quanlyslide/lietke.php');
	}
	elseif ($tam == 'quanlydonhang' && $query == 'lietke') {
		require_once('modules/quanlydonhang/lietke.php');
	}
	elseif ($tam == 'lienhe' && $query == 'capnhat') {
		require_once('modules/lienhe/quanly.php');
	}
	elseif($tam=='donhang' && $query=='xemdonhang'){
		require_once("modules/quanlydonhang/xemdonhang.php");

	}
	elseif($tam=='quanlydanhmucbaiviet' && $query=='them'){
		require_once("modules/quanlydanhmucbaiviet/them.php");
		require_once("modules/quanlydanhmucbaiviet/lietke.php");

	}
	elseif($tam=='quanlydanhmucbaiviet' && $query=='sua'){
		require_once("modules/quanlydanhmucbaiviet/sua.php");

	}
	elseif($tam=='quanlybinhluan' && $query=='lietke'){
		require_once("modules/quanlybinhluan/lietke.php");

	}
	elseif($tam=='quanlybinhluan' && $query=='sua'){
		require_once("modules/quanlybinhluan/sua.php");

	}
	elseif($tam=='quanlybaiviet' && $query=='them'){
		require_once("modules/quanlybaiviet/them.php");
		require_once("modules/quanlybaiviet/lietke.php");

	}
	elseif($tam=='quanlybaiviet' && $query=='sua'){
		require_once("modules/quanlybaiviet/sua.php");

	}
	else{
		require_once('modules/dashboard.php');
	}
 ?>







