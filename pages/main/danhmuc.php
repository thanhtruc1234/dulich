<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>

<div class="col-xs-6 col-sm-6 col-md-10 bg-light d-flex flex-wrap ">
	<h4 class="text-left m-2" style="width: 100%">Danh mục sản phẩm:  <?=$row_title['tendanhmuc']?> </h4>
					<?php
						while($row_pro = mysqli_fetch_array($query_pro)){
					 ?>
		 				<div class="card m-2  " style="width:220px; height: 450px;">
						  <img src="admincp/modules/quanlysp/uploads/<?=$row_pro['hinhanh']?>" class="card-img-top " alt="Điện thoại xịn" height="280px">
						  <div class="card-body">
						    <h6 class="card-title"><?=$row_pro['tensanpham']?></h6>
						    <p class="card-text"><?=$row_pro['tomtat']?></p>
						    <p class="card-text">Giá: <?=number_format($row_pro['giasp'],0,',','.').' '.'vnđ'?></p>
						    <a href="index.php?quanly=sanpham&id=<?=$row_pro['id_sanpham']?>" class="btn btn-outline-dark d-block">Xem chi tiết</a>
						  </div>
						</div> 
					<?php
					}
					?>				

		 		</div>
		 		<div class="clear-men"></div>
		 	</div>	<!-- end main -->