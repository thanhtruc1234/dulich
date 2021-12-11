<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
 ?>

<div class="container">
 	<div class="row">
		<div class="col-md-auto ">
		<p class="display-6">Liệt kê danh mục dich vụ</p>

		<form class="form-group" action="modules/quanlydanhmucsp/xuly.php" method="POST">
		<table class="table text-center"style="width: 150%;">
		  <thead>
		    <tr >
		      <th scope="col"style="width: 10%;">Id</th>
		      <th scope="col" style="width: %;">Tên danh mục</th>
		      <th scope="col" colspan="2" style="width: 10%;">Quản lý</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$i = 0;
		  	while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
		  		$i++;
		  	
		  	?>
		    <tr>
		      <td><?= $i ?></td>
		      <td><?= $row['tendanhmuc']?></td>
		      <td><a class="btn btn-outline-dark" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?=$row['id_danhmuc']?>">Sửa</a></td>
		      <td><a class="btn btn-outline-dark" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?=$row['id_danhmuc']?>">Xóa</a></td>
		      
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
