<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	
?>
<div class="col-xs-6 col-sm-6 col-md-10 bg-light ">
	<div class="col-md-12 bg-light d-flex flex-wrap ">
	<h1 class="display-6 text-left" style="width: 100%">Chi tiết dịch vụ</h1>
			<?php 
				while($row_chitiet = mysqli_fetch_array($query_chitiet)) { ?>

					<div class="card m-3 " style="width:480px; height: 230px;">
						  <img   src="admincp/modules/quanlysp/uploads/<?=$row_chitiet['hinhanh']?>" class="card-img-top" alt="..." width="220px" height="220px">
					</div>	  
					<form action="pages/main/themgiohang.php?idsanpham=<?=$row_chitiet['id_sanpham'] ?>" method="POST">
					
						<div class="container">
						<div class="row m-2">
							<table class="table table-hover table-text">
								<tr>
									<th scope="col">Tên dịch vụ: </th>
									<td><?= $row_chitiet['tensanpham']?></td>
								</tr>
								<tr>
									<th scope="col">Mã dịch vụ: </th>
									<td><?= $row_chitiet['masp']?></td>
								</tr>
								<tr>
									<th scope="col">Giá dịch vụ: </th>
									<td><?=number_format($row_chitiet['giasp'],0,',','.').' vnđ'?></td>
								</tr>
								<tr>
									<th scope="col">Thời gian: </th>
									<td><?= $row_chitiet['tomtat']?></td>
								</tr>
								<tr>
									<th scope="col">Số lượng người: </th>
									<td><?= $row_chitiet['soluong']?></td>
								</tr>
								<tr>
									<th scope="col">Danh mục dịch vụ: </th>
									<td><?= $row_chitiet['tendanhmuc']?></td>
								</tr>
								<tr class="text-center">
									
									<td colspan="2"><button class="btn btn-outline-dark" type="button" name="">Đặt ngay</button></td>
								</tr>

					
							</table>
						</div>
						</div>
					</form>	
				</div>
					<div class="col-md-12 bg-light d-flex flex-wrap ">	

						<p style="width: 100%;">
							  
							  <button class="btn btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
							    Nội dung chi tiết 
							  </button>
						</p>
								<div class="collapse" id="collapseExample">
								  <div class="card card-body">
								    <?= $row_chitiet['noidung']?>
								  </div>
								</div>
					</div>
					<!-- <div class="col-md-12 border d-inline" id="hienthithongsokithuat"></div> -->
					<div class="container binhluan">
	 				<div class="row mt-4">
	 					<div class="col-md-auto">
				 			<?php
								}
							 ?>
							 <h5 style="width: 100%;">Tất cả nhận xét:</h5>
							 
							 <?php
							 	 // echo $_GET['id'];
							 	$sql_binhluan = "SELECT * FROM tbl_binhluan WHERE id_sanpham_binhluan = ".$_GET['id']." AND tinhtrang = 1";
							 	$query_binhluan = mysqli_query($mysqli, $sql_binhluan);
							 	while($row_binhluan = mysqli_fetch_array($query_binhluan)){
							  ?>
							  <span class="mt-1" style="display:inline-block;">
							  <label style="font-weight: bold;"><?=$row_binhluan['ten'] ?> </label>
							  <i>(<?php if($row_binhluan['rating']==5){echo"Rất tuyệt vời";}
							  	elseif($row_binhluan['rating']==4){
							  		echo "Tuyệt vời";
							  	}
							  	elseif($row_binhluan['rating']==3){
							  		echo "Tạm được";
							  	}
							  	elseif($row_binhluan['rating']==2){
							  		echo "Khá tệ";
							  	}
							  	else{
							  		echo "Rất tệ";
							  	}
							   ?>):<span><?=$row_binhluan['noidung']?></i></span>
							  
							  </span>
							 <?php if ($row_binhluan['hinhanh']!="") {?>
							  <div class="align-middle"><img  src="images/cmt/<?= $row_binhluan['hinhanh']?>" height="300px" width="400px"></div>
							<?php } ?>
							  <div class="clear-men"></div>
							<?php

							 } 
							?>

							
							 <div>
							 	<?php if(isset($_SESSION['dangky'])){ ?>
							 	<form class="form-group mb-2 mt-4" autocomplete="off" action="" method="POST" enctype="multipart/form-data">

								 	<h5 class="mt-3">Đánh giá ngay :</h5>
								 	<div class="form-check">
									  <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault1" checked value="5">
									  <label class="form-check-label" for="flexRadioDefault1">
									    Rất tuyệt vời
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault2" value="4">
									  <label class="form-check-label" for="flexRadioDefault2">
									    Tuyệt vời
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault3" value="3">
									  <label class="form-check-label" for="flexRadioDefault3">
									    Tạm được
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault4" value="2">
									  <label class="form-check-label" for="flexRadioDefault4">
									    Khá tệ
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault5" value="1">
									  <label class="form-check-label" for="flexRadioDefault5">
									    Rất tệ
									  </label>
									</div>
									<div class="custom-file">
									    Hình ảnh chuyến đi: <input required placeholder="hình ảnh sản phẩm" type="file" name="hinhanh" class="custom-file-input" id="inputGroupFile01"
									      aria-describedby="inputGroupFileAddon01">
									  </div>
								 	Nội dung đánh giá:<textarea  class="form-control" required placeholder="Bạn đi cùng ai, Có kỷ niệm nào đáng nhớ không?" rows="4" name="noidung" required style="width:50% !important;"></textarea>
								 	  
					</div>
								 	<input type="submit" class="btn btn-success mt-1" name="submitbinhluan" value="Đánh giá">
								</form>
							<?php }else{?>
								<a class="btn btn-outline-success" href="index.php?quanly=dangnhap"><h5>Đăng nhập để đánh giá về dịch vụ</h5></a>
							<?php } ?>
				<?php
				if (isset($_POST['submitbinhluan'])) {
						$ten = $_SESSION['dangky'];
						$rating = $_POST['rating'];
						$noidungbinhluan = $_POST['noidung'];
						$tt = 0;
						$hinhanh = $_FILES['hinhanh']['name'];
						$folder_path = 'images/cmt/';
					    $file_path = $folder_path.$_FILES['hinhanh']['name'];
					    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
			   
				        if($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif" ) {
				            echo"Định dạng không phù hợp!";
				         //$flag = false;
				        }else{ 
				           
				            $sql_insert_cmt="INSERT INTO tbl_binhluan(ten,rating,hinhanh, noidung, id_sanpham_binhluan, tinhtrang) VALUES ('".$ten."','".$rating."','".$hinhanh."','".$noidungbinhluan."','".$_GET['id']."', '".$tt."')";
				            move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $file_path);
							$qery_cmt = mysqli_query($mysqli, $sql_insert_cmt);
							echo "Đánh giá đang được xem xét!";
			        }
			    }

			          
					
					// if (isset($_POST['submitbinhluan'])) {
					// 	$ten = $_SESSION['dangky'];
					// 	$rating = $_POST['rating'];
					// 	$noidungbinhluan = $_POST['noidung'];
					// 	$tt = 0;
					// 	if(!empty($ten)&&!empty($noidungbinhluan)){
					// 	$sql_insert_cmt="INSERT INTO tbl_binhluan(ten,rating, noidung, id_sanpham_binhluan, tinhtrang) VALUES ('".$ten."','".$rating."','".$noidungbinhluan."','".$_GET['id']."', '".$tt."')";
					// 	$qery_cmt = mysqli_query($mysqli, $sql_insert_cmt);
					// 	echo "Đánh giá đang được xem xét!";


					// 	}
					// }

				?> 

	

							</div>
	 					</div>
	 				</div>
	 			</div>
	 			</div>
	 			
		 	</div>
		 <div class="clear-men"></div>
	</div>	<!-- end main -->