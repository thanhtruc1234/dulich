<div class="container">
	<div class="row">
		<div class="col-md-auto">
		  	<p class="display-6">Thêm danh mục bài viết</p>
				<table width="60%" class="table">
				 <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php">
					  <tr>
					  	<td scope="col"><label for="ten">Tên danh mục bài viết</label></td>
					  	<td><input type="text" id="ten" class="form-control" name="tendanhmucbaiviet" required></td>
					  </tr>
					  <tr>
					    <td scope="col"><label for="thutu">Thứ tự</label></td>
					    <td><input type="text" id="thutu" class="form-control" name="thutu" required></td>
					  </tr>
					   <tr>
					    <td class="text-center" colspan="2"><input class="btn btn-outline-dark" type="submit" name="themdanhmucbaiviet" value="Thêm danh mục bài viết" ></td>
					  </tr>
				 </form>
				</table>
		</div>
	</div>
</div>


