<?php

  $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
  $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
 
 ?>
 <?php
  if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
  } 
?>

<!-- strar menu -->
<nav class="navbar navbar-expand-lg navbar-light slide">
  <div class="container">
    <a class="navbar-brand logo" href="index.php" title="Trang chủ">TRAVEL VIETNAM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb- mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" title="Trang chủ" href="index.php">TRANG CHỦ</a>
        </li>
        
        <li class="nav-item dropdown dropdown2">
          <a class="nav-link active" href="#" title="Sản phẩm" id="navbarDropdown">
            DANH MỤC
          </a>
          <ul class="dropdown-content ">
            <?php  while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){  ?>
            <li><a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?=$row_danhmuc['id_danhmuc']?>"><?=$row_danhmuc['tendanhmuc'] ?></a></li>
            <?php
             } 
            ?>
           
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?quanly=lienhe">LIÊN HỆ</a>
        </li>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?quanly=tintuc">TIN TỨC</a>
        </li>

        <?php
        if(isset($_SESSION['dangky'])){ 

        ?>
         <li class="nav-item dropdown dropdown2">
          <a class="nav-link active" href="#" id="navbarDropdown">
            <?=$_SESSION['dangky'] ?>
          </a>
          <ul class="dropdown-content ">
            <li><a class="dropdown-item" href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
            <li><a class="dropdown-item" href="index.php?quanly=thaydoimatkhau">ĐỔI MẬT KHẨU</a></li>
           
           
           
          </ul>
        </li>
        <?php
        }else{
         ?>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?quanly=dangnhap">ĐĂNG NHẬP</a>
        </li>
        <?php
        }
        ?>
        

      </ul>
      <form class="d-flex" action="index.php?quanly=timkiem" method="POST">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm địa điểm du lịch" aria-label="Search" name="tukhoa">
        <button class="btn btn-outline-success" type="submit" name="timkiem" >Search</button>
      </form>
    </div>
  </div>
</nav> 
		<!-- end menu -->
		