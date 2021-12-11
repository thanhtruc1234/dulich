<?php
	$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  	<p class="display-6">Sửa bài viết</p>

				<table width="100%" class="table table-bordered table-hover">
				<?php
				while($row = mysqli_fetch_array($query_sua_bv)) {
				?>
					 <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?=$row['id'] ?>" enctype="multipart/form-data">
						  <tr>
						  	<td scope="col">Tên bài viết</td>
						  	<td><input type="text" value="<?=$row['tenbaiviet'] ?>" name="tenbaiviet" required></td>
						  </tr>
						 
						   <tr>
						  	<td scope="col">Hình ảnh</td>
						  	<td>
						  		<input type="file" name="hinhanh">
						  		<img src="modules/quanlybaiviet/uploads/<?=$row['hinhanh'] ?>" width="150px">
						  	</td>

						  </tr>
						  <tr>
						  	<td scope="col">Tóm tắt</td>
						  	<td><textarea rows="10"  name="tomtat" style="resize: none" required><?=$row['tomtat'] ?></textarea></td>
						  </tr>
						   <tr>
						  	<td scope="col">Nội dung</td>
						  	<td><textarea rows="10"  name="noidung" style="resize: none" required><?=$row['noidung'] ?></textarea></td>
						  </tr>
						  <tr>
						    <td scope="col">Danh mục bài viết</td>
						    <td>
						    	<select name="danhmuc" class="form-select">
						    		<?php
						    		$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
						    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){

						    			if($row_danhmuc['id_baiviet']==$row['id_danhmuc']){
						    		?>
						    		<option selected value="<?=$row_danhmuc['id_baiviet'] ?>"><?=$row_danhmuc['tendanhmuc_baiviet'] ?></option>
						    		<?php
						    			}else{
						    		?>
						    		<option value="<?=$row_danhmuc['id_baiviet'] ?>"><?=$row_danhmuc['tendanhmuc_baiviet'] ?></option>
						    		<?php
						    			}
						    		} 
						    		?>
						    	</select>
						    </td>
						  </tr>
						  <tr>
						    <td scope="col">Tình trạng</td>
						    <td>
						    	<select name="tinhtrang" class="form-select">
						    		<?php
						    		if($row['tinhtrang']==1){ 
						    		?>
						    		<option value="1" selected>Kích hoạt</option>
						    		<option value="0">Ẩn</option>
						    		<?php
						    		}else{ 
						    		?>
						    		<option value="1">Kích hoạt</option>
						    		<option value="0" selected>Ẩn</option>
						    		<?php
						    		} 
						    		?>

						    	</select>
						    </td>
						  </tr>
						   <tr>
						    <td colspan="2"><input type="submit" name="suabaiviet" value="Sửa bài viết" class="btn btn-outline-dark"></td>
						  </tr>
					 </form>
				 <?php
				 } 
				 ?>

				</table>
		</div>
	</div>
</div>


