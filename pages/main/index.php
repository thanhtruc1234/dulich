<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*4)-4;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,4";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<div class="col-xs-6 col-sm-6 col-md-10 bg-light ">
	<div class="col-xs-auto col-sm-auto col-md-auto bg-light d-flex flex-wrap ">
	<h2 class="text-header" style="width: 100%">dịch vụ mới nhất</h2>
			<?php 
				while($row = mysqli_fetch_array($query_pro)) { ?>
				
		 			
						<div class="card m-3  " style="width:220px; height: 450px;">
						  <img src="admincp/modules/quanlysp/uploads/<?=$row['hinhanh']?>" class="card-img-top " alt="Điện thoại xịn" height="280px">
						  <div class="card-body">
						    <h6 class="card-title"><?=$row['tensanpham']?></h6>
						    <p class="card-text"><?=$row['tomtat']?></p>
						    <p class="card-text">Giá: <?=number_format($row['giasp'],0,',','.').' '.'vnđ'?></p>
						    <a href="index.php?quanly=sanpham&id=<?=$row['id_sanpham']?>" class="btn btn-outline-dark d-block">Xem chi tiết</a>
						  </div>
						</div> 
				<?php
					}
				 ?>
				<div class="clear-men"></div>
	</div>
				<?php
					$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
					$row_count = mysqli_num_rows($sql_trang);  
					$trang = ceil($row_count/4);
				?>
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
		 	 		<nav aria-label="Page navigation example" class="flex-nowrap mb-2">
		 	 		<?php
					
						for($i=1;$i<=$trang;$i++){ 
					?>
						  <ul class="pagination">
						    <li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?> class="page-item"><a class="page-link" href="index.php?trang=<?= $i ?>"><?=$i ?></a></li>
					<?php
					} 
					?>
						  </ul>
					</nav>
			
</div>
</div>
		 		
</div>	<!-- end main -->
