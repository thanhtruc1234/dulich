<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	$query_bv_all = mysqli_query($mysqli,$sql_bv);
	
	$row_bv_title = mysqli_fetch_array($query_bv);
?>
<div class="col-xs-6 col-sm-6 col-md-10 d-flex flex-wrap ">
	<h4 class="text-left m-2" style="width: 100%">Bài viết: <?=$row_bv_title['tenbaiviet'] ?></h4>
				<ul class="list-group">
					<?php
					while($row_bv = mysqli_fetch_array($query_bv_all)){ 
					?>
					<li class="list-group-item">
						<h2><?=$row_bv['tenbaiviet'] ?></h2>
						<p style="font-weight: bold;"><?=$row_bv['tomtat'] ?></p>

						<p style="margin:10px" class="title_product"><?=$row_bv['noidung'] ?></p>
					</li>
					<?php
					} 
					?>
				</ul>	
		 		</div>
		 		<div class="clear-men"></div>
		 	</div>	<!-- end main -->