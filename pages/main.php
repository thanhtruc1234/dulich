<main>
 <!-- main start -->
					<?php require_once('sidebar/sidebar.php'); ?>

					<?php
						if(isset($_GET['quanly'])){
							$tam = $_GET['quanly'];	
						}
						else{
							$tam = '';
						}
						if($tam == 'danhmucsanpham'){
							require_once('main/danhmuc.php');
						}
						
						
						elseif($tam == 'danhmucbaiviet'){
							require_once('main/danhmucbaiviet.php');

						}
						elseif($tam == 'baiviet'){
							require_once('main/baiviet.php');

						}
						elseif($tam == 'tintuc'){
							require_once('main/tintuc.php');

						}
						elseif($tam == 'sanpham'){
							require_once('main/sanpham.php');

						}
						elseif($tam == 'dangky'){
							require_once('main/dangky.php');

						}
						elseif($tam == 'thanhtoan'){
							require_once('main/thanhtoan.php');

						}
						elseif($tam == 'thanhtoanbank'){
							require_once('main/thanhtoanbank.php');

						}
						elseif($tam == 'thanhtoanmomo'){
							require_once('main/thanhtoanmomo.php');

						}
						elseif($tam == 'dangnhap'){
							require_once('main/dangnhap.php');

						}
						elseif($tam == 'timkiem'){
							require_once('main/timkiem.php');

						}
						elseif($tam == 'thongbaodathang'){
							require_once('main/thongbaodathang.php');

						}
						elseif($tam == 'thaydoimatkhau'){
							require_once('main/thaydoimatkhau.php');

						}
						elseif($tam == 'lienhe'){
							require_once('main/lienhe.php');

						}
						else{
							require_once('main/index.php');

						}
					 ?>

		 			
</main>	