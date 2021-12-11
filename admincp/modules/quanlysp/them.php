
<div class="container">
 	<div class="row">
		<div class="col-md-auto ">
		<p class="display-6">Thêm dịch vụ chi tiết</p>
		<form name="myFormsp" onsubmit="return validateFormsp()" class="form-group" action="modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">
		<table class="table table-bordered text-left">
		  <thead>
		    <tr>
		      <th scope="col">Tên dịch vụ</th>
		      <td><input required type="text" class="form-control" name="tensanpham" placeholder="Tên dịch vụ"></td>	      
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		      <th scope="col">Mã dịch vụ</th>
		      <td><input required type="text" class="form-control" name="masp" placeholder="mã dịch vụ"></td>	      
		    </tr>
		    <tr>
		      <th scope="col">Giá dịch vụ</th>
		      <td><input required type="text" class="form-control" name="giasp" placeholder="giá dịch vụ"></td>	      
		    </tr>
		    <tr>
		      <th scope="col">Số lượng người</th>
		      <td><input required type="text" class="form-control" name="soluong" placeholder="Số lượng người"></td>	      
		    </tr>
		    <tr>
		    	<th scope="col">Hình ảnh</th>
		    	<td>
			    	<div class="input-group">
					  <div class="custom-file">
					    <input required placeholder="hình ảnh sản phẩm" type="file" name="hinhanh" class="custom-file-input" id="inputGroupFile01"
					      aria-describedby="inputGroupFileAddon01">
					   
					  </div>
					</div>
		    	</td>
		    </tr>	
		    <tr>
		      <th scope="col">Thời gian</th>
		      <td><textarea required placeholder="tóm tắt dịch vụ" class="form-control" name="tomtat"></textarea></td>	      
		    </tr>
		    <tr>
		      <th scope="col">Nội dung</th>
		      <td><textarea required placeholder="nội dung chi tiết" class="form-control" name="noidung"></textarea></td>	      
		    </tr>
		    <tr>
			      <th scope="col">Danh mục dịch vụ</th>
					<td>
						<select name="danhmuc" class="form-select" aria-label="Default select example">
						<?php 
							$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
							$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
							while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
						 ?>
						  <option value="<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc']?></option>
						  
						<?php 
							}
						 ?>
						</select>
					</td>	      
			 </tr>
		    
			<tr>
			      <th scope="col">Tình trạng</th>
					<td>
						<select name="tinhtrang" class="form-select" aria-label="Default select example">
						  <option value="1">Kích hoạt</option>
						  <option value="0">Ẩn</option>
						</select>
					</td>	      
			 </tr>	
			</tr>

		    <tr>
		    	<td colspan="2" class="text-center"><button type="submit" name="themsanpham" class="btn btn-outline-dark">Thêm dịch vụ</button></td>
		    </tr>  
		  </tbody>
		</table>
		
		</form>
		</div>

		</div>

	</div>	


</div>
