<?php
	$sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
	$query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>
<div class="container">
	<div class="row">
		<div class="col-md-auto">
		  	<p class="display-6">liệt kê danh mục bài viết</p>
				<table style="width:100%" class="table table-bordered">
				  <tr>
				  	<th>Id</th>
				    <th>Tên danh mục</th>
				  	<th>Quản lý</th>
				  
				  </tr>
				  <?php
				  $i = 0;
				  while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
				  	$i++;
				  ?>
				  <tr>
				  	<td><?=$i ?></td>
				    <td><?=$row['tendanhmuc_baiviet'] ?></td>
				   	<td>
				   		<a class="btn btn-outline-dark" href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?= $row['id_baiviet'] ?>">Xoá</a> | <a class="btn btn-outline-dark" href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?=$row['id_baiviet'] ?>">Sửa</a> 
				   	</td>
				   
				  </tr>
				  <?php
				  } 
				  ?>
				 
				</table>

		</div>
	</div>
</div>


