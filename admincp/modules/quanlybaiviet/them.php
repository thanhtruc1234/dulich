<div class="container">
	<div class="row">
		<div class="col-md-12">
		  	<p class="display-6"> Thêm bài viết</p>

				<table  width="100%" class="table">
				 <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
					  <tr>
					  	<td scope="col">Tên bài viết</td>
					  	<td><input type="text" name="tenbaiviet" class="form-control" required></td>
					  </tr>

					   <tr>
					  	<td scope="col">Hình ảnh</td>
					  	<td><input type="file" name="hinhanh" class="form-control" required></td>
					  </tr>
					  <tr>
					  	<td scope="col">Tóm tắt</td>
					  	<td><textarea rows="10"  name="tomtat" style="resize: none" class="form-control" required></textarea></td>
					  </tr>
					   <tr>
					  	<td scope="col">Nội dung</td>
					  	<td><textarea rows="10"  name="noidung" style="resize: none" class="form-control" required></textarea></td>
					  </tr>
					  <tr>
					    <td scope="col">Danh mục bài viết</td>
					    <td>
					    	<select name="danhmuc" class="form-select">
					    		<?php
					    		$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
					    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
					    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
					    		?>
					    		<option value="<?=$row_danhmuc['id_baiviet'] ?>"><?=$row_danhmuc['tendanhmuc_baiviet'] ?></option>
					    		<?php
					    		} 
					    		?>
					    	</select>
					    </td>
					  </tr>
					  <tr>
					    <td scope="col">Tình trạng</td>
					    <td>
					    	<select name="tinhtrang" class="form-select">
					    		<option value="1">Kích hoạt</option>
					    		<option value="0">Ẩn</option>
					    	</select>
					    </td>
					  </tr>
					   <tr class="text-center">
					    <td colspan="2"><input type="submit" class="btn btn-outline-dark" name="thembaiviet" value="Thêm bài viết"></td>
					  </tr>
				 </form>
				</table>
		</div>
	</div>
</div>


