<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<div class="col-xs-6 col-sm-6 col-md-10 bg-light d-flex flex-wrap ">
	<h1 class="display-6 text-left" style="width: 100%">Từ khoá tìm kiếm : <?=$_POST['tukhoa']; ?></h1>
			<?php 
				while($row = mysqli_fetch_array($query_pro)) { ?>
				
		 				<div class="card m-2" style="width:220px; height: 470px;">
						  <img   src="admincp/modules/quanlysp/uploads/<?=$row['hinhanh']?>" class="card-img-top" alt="..." width="220px" height="250px">
						  <div class="card-body">
						    <h6 class="card-title">Tên sản phẩm:<?=$row['tensanpham']?></h6>
						     <h6 class="card-title">Tên danh mục:<?=$row['tendanhmuc']?></h6>
						    <p class="card-text"><?=$row['tomtat']?></p>
						  </div>
						  <p class="card-text d-block m-2">Giá: <?=number_format($row['giasp'],0,',','.').' '.'vnđ'?></p>
						  <a href="index.php?quanly=sanpham&id=<?=$row['id_sanpham']?>" class="btn btn-outline-dark d-block mb-2">Xem chi tiết</a>
						</div>
						
				<?php
					}
				 ?>
		 			</div>

		 		</div>
		 		<div class="clear-men"></div>
		 	</div>	<!-- end main -->