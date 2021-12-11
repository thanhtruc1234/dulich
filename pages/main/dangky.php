<div class="col-xs-6 col-sm-6 col-md-10   " style="background-color:#6f57b11f">
<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];



		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['email'] = $email;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			echo(' <script> location.replace("index.php?quanly=giohang"); </script>');
			//header("Location:index.php?quanly=giohang");
			

		}
	}
?>


<div class="m-5" style="width: 400px;">
	 <a href="index.php?quanly=dangnhap" type="submit" class="btn btn-success"><h5>Đăng nhập nếu có tài khoản</h5></a>
<form class="form-group" action="" method="POST">
	<div class="mb-1">
    <label for="exampleInput" class="form-label">Họ tên</label>
    <input type="text" class="form-control" id="exampleInput" required name="hovaten">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">Email của bạn sẽ được bảo mật!</div>
  </div>
  <div class="mb-1">
    <label for="exampleInputphone" class="form-label">Điện thoại</label>
    <input type="text" class="form-control" id="exampleInputphone"required name="dienthoai">
  </div>
  <div class="mb-1">
  	<div class="mb-1">
    <label for="exampleInputAddress" class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" id="exampleInputAddress"required name="diachi">
  </div>
    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
    <input type="password" class="form-control" id="exampleInputPassword1"required name="matkhau">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-secondary" name="dangky">ĐĂNG KÝ</button>
  </div>
 
</form>
</div>



		<div class="clear-men"></div>
</div>	<!-- end main -->