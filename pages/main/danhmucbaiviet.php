<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]' ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<div class="col-xs-6 col-sm-6 col-md-10 bg-light d-flex flex-wrap ">
	<h4 class="text-left m-2" style="width: 100%">Danh mục bài viết:<?=$row_title['tendanhmuc_baiviet'] ?> </h4>
				<ul class="list-group">
					<?php
					while($row_bv = mysqli_fetch_array($query_bv)){ 
					?>
					<li class="list-group-item">
						<a href="index.php?quanly=baiviet&id=<?=$row_bv['id'] ?>">
							<img src="admincp/modules/quanlybaiviet/uploads/<?=$row_bv['hinhanh'] ?>">
							<p class="title_product">Tên bài viết : <?=$row_bv['tenbaiviet'] ?></p>

							
						</a>
						<p style="margin:10px" class="text-left">Tóm tắt: <?=$row_bv['tomtat'] ?></p>
					</li>
					<?php
					} 
					?>
					
				</ul>		

		 		</div>
		 		<div class="clear-men"></div>
		 	</div>	<!-- end main -->