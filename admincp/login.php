<?php session_start(); 
 require_once('config/config.php');
 if(isset($_POST['dangnhap'])){
  $taikhoan = $_POST['username'];
  $matkhau = md5($_POST['password']);
  $sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if($count>0){
    $_SESSION['dangnhap']= $taikhoan;
    header('location: index.php');
  }else{
    alert("tài khoản hoặc mật khẩu không chính xác!");
    //header('location: login.php');
  
 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGIN ADMIN </title>
  <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <form class="form-group" autocomplete="off" action="" method="POST">
              <h2 class="fw-bold mb-2 text-uppercase">ĐĂNG NHẬP ADMIN</h2>
              <p class="text-white-50 mb-5">Vui lòng nhập tài khoản và mật khẩu!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeUser" class="form-control form-control-lg" name="username" placeholder="Tài khoản" required />
             
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" placeholder="Mật khẩu" required />
               
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="dangnhap">ĐĂNG NHẬP</button>

             </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <?php

  function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?> 



  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>