<?php
$sql = "SELECT * FROM tbl_binhluan WHERE id_binhluan = '".$_GET['idbinhluan']."' LIMIT 1 ";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);	
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  	<p class="display-6">Sửa trạng thái bình luận</p>
		<table class="table table-bordered" style="width:60%">
			<form action="modules/quanlybinhluan/xuly.php?idbinhluan=<?=$row['id_binhluan']?>" method="POST">
			<tr>
				<th style="width: 20%;" scope="col">Tên:</th>
				<td><?=$row['ten']?> </td>
			</tr>
			<tr>
				<th scope="col">ID sản phẩm:</th>
				<td><?=$row['id_sanpham_binhluan']?></td>
			</tr>
			<tr><th>Nội dung bình luận:</th>
				<td><?=$row['noidung']?></td>
			</tr>
		
			<tr><th scope="col">Trạng thái</th>
				<td><select class="form-select" name="tinhtrang">
						<?php
							if($row['tinhtrang']==1){ ?>
					  	  <option value="1" selected>Hiện bình luận</option>
						  <option value="0">Ẩn bình luận</option>
						<?php }else{
						 ?>
						  <option value="1">Hiện bình luận</option>
						  <option value="0" selected>Ẩn bình luận</option>
						</select>

						<?php } ?>	
					</select>
				<tr class="text-center"><td colspan="2"><input type="submit" value="Sửa bình luận" class="btn btn-outline-dark" name="suabinhluan"></td></tr>	

			</form>		
			</td>
			</tr>
			

		</table>

			


		</form>

		</div>
	</div>
</div>


