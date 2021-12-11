<?php
	$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
	$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  	<p class="display-6">liệt kê bài viết</p>
				<table style="width:100%" class="table table-bordered align-middle table-hover" >
				  <tr>
				  	<th scope="col">Id</th>
				    <th scope="col">Tên bài viết</th>
				    <th scope="col">Hình ảnh</th>
				    <th scope="col">Danh mục</th>
				    <th scope="col">Tóm tắt</th>
				    <th scope="col">Trạng thái</th>
				  	<th scope="col">Quản lý</th>
				  
				  </tr>
				  <?php
				  $i = 0;
				  while($row = mysqli_fetch_array($query_lietke_bv)){
				  	$i++;
				  ?>
				  <tr>
				  	<td><?=$i ?></td>
				    <td><?=$row['tenbaiviet'] ?></td>
				    <td><img src="modules/quanlybaiviet/uploads/<?=$row['hinhanh'] ?>" width="150px"></td>
				   
				    <td><?=$row['tendanhmuc_baiviet'] ?></td>
				   
				    <td><?=$row['tomtat'] ?></td>
				    <td><?php if($row['tinhtrang']==1){
				        echo 'Kích hoạt';
				      }else{
				        echo 'Ẩn';
				      } 
				      ?>
				      
				    </td>
				   	<td>
				   		<a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?=$row['id'] ?>" class="btn btn-outline-dark">Xoá</a> | <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?=$row['id'] ?>" class="btn btn-outline-dark">Sửa</a> 
				   	</td>
				   
				  </tr>
				  <?php
				  } 
				  ?>
				 
				</table>

		</div>
	</div>
</div>


