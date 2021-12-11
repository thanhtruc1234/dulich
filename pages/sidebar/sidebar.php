		<div class="container-fluid">
		 		<div class="row">
		 			<div class="col-xs-6 col-sm-6 col-md-2 " >
		 				<ul class="list-group d-inline-block text-center"style="width: 100%;">
		 					<li class="list-group-item"><h5>Danh mục dịch vụ:</h5></li>
		 				<?php
		 					$sql_danhmuc2 = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
  							$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc2);
		 					while ($row = mysqli_fetch_array($query_danhmuc)) {
		 					 ?>
		 					
						  
						  <li class="list-group-item"><a href="index.php?quanly=danhmucsanpham&id=<?=$row['id_danhmuc']?>"><?=$row['tendanhmuc']?></a></li>
						<?php 
							}
						?>
						</ul>
						<ul class="list-group d-inline-block text-center" style="width: 100%;">
							
						  <li class="list-group-item"><h5>Danh mục tin tức:</h5></li>
						 	 <?php
	
								$sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
								$query_danhmuc_bv = mysqli_query($mysqli,$sql_danhmuc_bv);
								while($row = mysqli_fetch_array($query_danhmuc_bv)){
						    		
							?>
						  <li class="list-group-item"><a href="index.php?quanly=danhmucbaiviet&id=<?=$row['id_baiviet']?>"><?=$row['tendanhmuc_baiviet'] ?></a></li>
							<?php

								} 
							?>
						</ul>
		 			</div>