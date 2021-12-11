<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = ".$_GET['iddanhmuc']." LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);

 ?>
<div class="container">
 	<div class="row">
		<div class="col-md-auto ">
		<p class="display-6">Sửa danh mục dịch vụ</p>
		<form name="myForm" onsubmit="return validateForm()" class="form-group" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?=$_GET['iddanhmuc']?>" method="post">
		<table class="table text-center">
		  <thead>
		    <tr>
		      <th scope="col">Tên danh mục</th>
		      <th scope="col">Thứ tự</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		while($dong = mysqli_fetch_array($query_sua_danhmucsp) ) { ?>

		    <tr>
		      <td><input required type="text" name="tendanhmuc" class="form-control" value="<?=$dong['tendanhmuc']?>"></td>
		      <td><input required type="text" name="thutu" class="form-control" value="<?=$dong['thutu']?>"></td>
		    </tr> 
		    <tr>
		    	<td colspan="2"><button type="submit" name="suadanhmuc" class="btn btn-outline-dark ">Sửa danh mục</button></td>
		    </tr> 
		    <?php
		    }
		    ?> 
		  </tbody>
		</table>
		
		</form>
		</div>

		</div>

	</div>	


</div>
