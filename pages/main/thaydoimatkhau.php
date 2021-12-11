<div class="col-xs-6 col-sm-6 col-md-10   " style="background-color:#6f57b11f">
<?php
  if(isset($_POST['doimatkhau'])){
    $taikhoan = $_POST['email'];
    $matkhau_cu = md5($_POST['password_cu']);
    $matkhau_moi = md5($_POST['password_moi']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
      $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
      echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
    }else{
      echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
    }
  } 
?>
  <div class="m-5" style="width: 400px;">
  	 <h3>Thay đổi mật khẩu</h3>
      <form class="form-group" action="" method="POST">	
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email của bạn">
        <div class="mb-2">
          <label for="exampleInputPassword1" class="form-label">Mật khẩu hiện tại</label>
          <input type="password" class="form-control" id="exampleInputPassword1"required name="password_cu" placeholder="Mật khẩu hiện tại của bạn">
        </div>
         <div class="mb-2">
          <label for="exampleInputPassword2" class="form-label">Mật khẩu mới</label>
          <input type="password" class="form-control" id="exampleInputPassword2"required name="password_moi" placeholder="Mật khẩu mới của bạn">
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-secondary" name="doimatkhau">ĐỔI MẬT KHẨU</button>
        </div>
       
      </form>
  </div>
</div>
<div class="clear-men"></div>
</div>	<!-- end main -->