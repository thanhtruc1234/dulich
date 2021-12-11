<?php
$sql = "SELECT * FROM tbl_binhluan ORDER BY id_binhluan DESC";
$query = mysqli_query($mysqli, $sql);	
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		  	<p class="display-6">liệt kê bình luận</p>
		<table class="table table-bordered align-middle">
			<thead>
				<tr class="">
					<th>Số TT</th>
					<th>Tên</th>
					<th>ID sản phẩm</th>
					<th class="text-center">Hình ảnh</th>
					<th>Nội dung</th>
					<th>Tình Trang</th>
					<th class="text-center" colspan="2">Quản lý</th>
				</tr>
			</thead>
			<?php 
			$i = 0;
			while ($row = mysqli_fetch_array($query)) {
				$i++;
				?>
			<tbody>
				<tr>
					<td><?=$i?></td>
					<td><?=$row['ten']?></td>
					<td><?=$row['id_sanpham_binhluan']?></td>
					<td class="align-middle m-auto"><img  src="../images/cmt/<?= $row['hinhanh']?>" height="300px" width="400px"></td>
					<td><?=$row['noidung']?></td>
					<td><?php if ($row['tinhtrang']==1){
						echo "Hiện bình luận";
					}else{ echo "Ẩn bình luận";}?></td>
					<td class="text-center"><a href="?action=quanlybinhluan&query=sua&idbinhluan=<?=$row['id_binhluan']?>" class="btn btn-outline-dark">Sửa</a></td>
					<td class="text-center"><a href="modules/quanlybinhluan/xuly.php?idbinhluan=<?=$row['id_binhluan']?>" class="btn btn btn-outline-dark">Xóa</a></td>
				</tr>
			</tbody>
			<?php 
			}
			?>
		</table>

		</div>
	</div>
</div>


