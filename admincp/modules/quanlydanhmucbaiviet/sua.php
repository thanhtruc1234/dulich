<?php
	$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>
<div class="container">
	<div class="row">
		<div class="col-md-auto">
		  	<p class="display-6">Sửa danh mục bài viết</p>
			<table  width="60%" class="table table-bordered" >
			 <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?=$_GET['idbaiviet'] ?>">
			 	<?php
			 	while($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
			 	?>
				  <tr>
				  	<td scope="col">Tên danh mục</td>
				  	<td><input type="text" value="<?=$dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet" required></td>
				  </tr>
				  <tr>
				    <td scope="col">Thứ tự</td>
				    <td><input type="text" value="<?=$dong['thutu'] ?>" name="thutu" required></td>
				  </tr>
				   <tr>
				    <td colspan="2" class="text-center"><input class="btn btn-outline-dark" type="submit" name="suadanhmucbaiviet" value="Sửa danh mục bài viết"></td>
				  </tr>
				  <?php
				  } 
				  ?>

			 </form>
			</table>

		</div>
	</div>
</div>


