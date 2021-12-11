<?php
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
 ?>

<div class="container">
 	<div class="row">
		<div class="col-md-auto ">
		<p class="display-6">Liệt kê dịch vụ</p>

		<form class="form-group" action="modules/quanlydanhmucsp/xuly.php" method="POST">
		<table class="table table-hover table-bordered text-center overflow-auto " style="width: 120%;">
		  <thead>
		    <tr >
		      <th scope="col">Id</th>
		      <th scope="col">Tên dịch vụ</th>
		      <th scope="col">Hình ảnh</th>
		      <th scope="col">Giá dịch vụ</th>
		      <th scope="col">Số lượng người</th>
		       <th scope="col">Danh mục</th>
		      <th scope="col">Mã dịch vụ</th>
		      <th scope="col">Thời gian</th>
		      <th scope="col">Trạng thái</th>
		      <th scope="col" colspan="2">Quản lý </th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$i = 0;
		  	while ($row = mysqli_fetch_array($query_lietke_sp)) {
		  		$i++;
		  	
		  	?>
		    <tr>
		      <td class="align-middle"><?= $i ?></td>
		      <td class="align-middle"><?= $row['tensanpham']?></td>
		      <td class="align-middle"><img alt="hình ảnh sản phẩm" src="modules/quanlysp/uploads/<?= $row['hinhanh']?>" height="190px" width="140px"></td>
		      <td class="align-middle"><?= $row['giasp']?></td>
		      <td class="align-middle"><?= $row['soluong']?></td>
		       <td class="align-middle"><?= $row['tendanhmuc']?></td>
		      <td class="align-middle"><?= $row['masp']?></td>
		      <td class="align-middle"><?= $row['tomtat']?></td>
		      <td class="align-middle"><?= $row['tinhtrang'] == 1?"Kích hoạt":"Ẩn";?></td>
		      <td class="align-middle"><a class="btn btn-outline-dark" href="?action=quanlysp&query=sua&idsanpham=<?=$row['id_sanpham']?>">Sửa</a></td>
		      <td class="align-middle"><a class="btn btn-outline-dark" href="modules/quanlysp/xuly.php?idsanpham=<?=$row['id_sanpham']?>">Xóa</a></td>
		      
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
