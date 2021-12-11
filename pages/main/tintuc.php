<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	
?>
<div class="col-xs-6 col-sm-6 col-md-10 bg-light d-flex flex-wrap ">
	<h1 class="display-6 text-left" style="width: 100%">Tin tức tổng hợp</h1>
		<ul class="list-group">
					<?php
					while($row_bv = mysqli_fetch_array($query_bv)){ 
					?>
					<li class="list-group-item">
						<a href="index.php?quanly=baiviet&id=<?=$row_bv['id'] ?>">
							<img src="admincp/modules/quanlybaiviet/uploads/<?=$row_bv['hinhanh'] ?>">
							<p class="title_product">Tên bài viết : <?=$row_bv['tenbaiviet'] ?></p>

							
						</a>
						<p style="margin:10px" class="title_product"><?=$row_bv['tomtat'] ?></p>
					</li>
					<?php
					} 
					?>
					
				</ul>
		 		<div class="clear-men"></div>
		 	</div>	<!-- end main -->