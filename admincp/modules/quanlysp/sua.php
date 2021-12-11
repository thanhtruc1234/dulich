<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = ".$_GET['idsanpham']." LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
 ?>

<div class="container">
 	<div class="row">
		<div class="col-md-auto">
		<p class="display-6">Sửa sản phẩm</p>
		<table class="table table-bordered text-left">
				<?php
				while ($row = mysqli_fetch_array($query_sua_sp)) { ?>

			<form name="myForm" onsubmit="return validateForm()" class="form-group" action="modules/quanlysp/xuly.php?idsanpham=<?=$row['id_sanpham']?>" method="post" enctype="multipart/form-data">
	

		  <thead>
		    <tr>
		      <th scope="col">Tên sản phẩm</th>
		      <td><input required type="text" class="form-control" name="tensanpham" value="<?=$row['tensanpham']?>"></td>	      
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		      <th scope="col">Mã sản phẩm</th>
		      <td><input required type="text" class="form-control" name="masp" value="<?=$row['masp']?>"></td>	      
		    </tr>
		    <tr>
		      <th scope="col">Giá sản phẩm</th>
		      <td><input required type="text" class="form-control" name="giasp" value="<?=$row['giasp']?>"></td>	      
		    </tr>
		    <tr>
		      <th scope="col">Số lượng</th>
		      <td><input required type="text" class="form-control" name="soluong" value="<?=$row['soluong']?>"></td>	      
		    </tr>
		    <tr>
		    	<th scope="col">Hình ảnh</th>
		    	<td>
			    	<div class="input-group">
					  <div class="custom-file">
					    <input type="file" name="hinhanh" class="custom-file-input" id="inputGroupFile01"
					      aria-describedby="inputGroupFileAddon01">
					   	<img src="modules/quanlysp/uploads/<?= $row['hinhanh']?>" height="200px" width="150px">
					  </div>
					</div>
		    	</td>
		    </tr>	
		    <tr>
		      <th scope="col">Thời gian</th>
		      <td><textarea required class="form-control" name="tomtat"><?=$row['tensanpham']?></textarea></td>	      
		    </tr>
		    <tr>
		      <th scope="col">Nội dung</th>
		      <td><textarea required class="form-control" name="noidung"><?=$row['noidung']?></textarea></td>	      
		    </tr>
		    <tr>
			      <th scope="col">Danh mục sản phẩm</th>
					<td>
						<select name="danhmuc" class="form-select" aria-label="Default select example">
						<?php 
							$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
							$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
							while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
								if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
						 ?>
						  <option selected value="<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc']?></option>
						  
						<?php
						}else{
						?>
						<option  value="<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc']?></option>
						<?php

							} 
						}
						 ?>
						</select>
					</td>	      
			</tr>
			<tr>
			      <th scope="col">Tình trạng</th>
					<td>
						<select name="tinhtrang" class="form-select" aria-label="Default select example">
						<?php
							if($row['tinhtrang']==1){ ?>
					  	  <option value="1" selected>Kích hoạt</option>
						  <option value="0">Ẩn</option>
						<?php }else{
						 ?>
						  <option value="1">Kích hoạt</option>
						  <option value="0" selected>Ẩn</option>
						</select>

						<?php } ?>
					</td>	      
			    </tr>	
			</tr>

		    <tr>
		    	<td colspan="2" class="text-center"><button type="submit" name="suasanpham" class="btn btn-outline-dark">Sửa Sản phẩm</button></td>
		    </tr>  
		  </tbody>
		  </form>
		  <?php }  ?>
		</table>
		
		
		</div>

		</div>

	</div>	


</div>
