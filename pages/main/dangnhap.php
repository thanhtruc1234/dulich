<div class="col-xs-6 col-sm-6 col-md-10   " style="background-color:#6f57b11f">
<?php
  if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);

    if($count==0){
       echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không chính xác!');</script>";
   
     
    }else{
      
       $row_data = mysqli_fetch_array($row);
      $_SESSION['dangky'] = $row_data['tenkhachhang'];
      $_SESSION['email'] = $row_data['email'];
      $_SESSION['id_khachhang'] = $row_data['id_dangky'];
      echo(' <script> location.replace("index.php"); </script>');
       
    }
  } 
?>

  <div class="m-5" style="width: 400px;">
  	 <a href="index.php?quanly=dangky" type="submit" class="btn btn-success"><h5>ĐĂNG KÝ NẾU CHƯA CÓ TÀI KHOẢN</h5></a>
      <form class="form-group" action="" method="POST">	
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email của bạn">
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="exampleInputPassword1"required name="password" placeholder="Mật khẩu của bạn">
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-secondary" name="dangnhap">ĐĂNG NHẬP</button>
        </div>
       
      </form>
  </div>
</div>
<div class="clear-men"></div>
</div>	<!-- end main -->