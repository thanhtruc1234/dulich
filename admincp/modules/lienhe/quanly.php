<?php
	$sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  	<p class="display-6">Quản lý trang web</p>
				<table class="table table-bordered">
					<?php
					 	while($dong = mysqli_fetch_array($query_lh)) {
						 	?>
					 <form method="POST" action="modules/lienhe/xuly.php?id=<?=$dong['id'] ?>" enctype="multipart/form-data" class="form-group">
						  
						   <tr>
						  	<td scope="col">Thông tin liên hệ</td>
						  	<td><textarea rows="10"  name="thongtinlienhe" class="form-control"><?=$dong['thongtinlienhe'] ?></textarea></td>
						  </tr>
						  
						   <tr>
						    <td colspan="2"><input type="submit" name="submitlienhe" value="Cập nhật" class="btn btn-outline-dark"></td>
						  </tr>
						  <?php 
							}
						  ?>
					 </form>
				</table>

		</div>
	</div>
</div>



