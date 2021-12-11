<?php
  if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
  }
?>

<!-- menu start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse u-list" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="index.php?action=quanlydanhmucsanpham&query=them">danh mục dịch vụ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=quanlysp&query=them">dịch vụ chi tiết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=quanlydanhmucbaiviet&query=them">danh mục bài viết</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=quanlybaiviet&query=them">bài viết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=lienhe&query=capnhat">Liên hệ</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=quanlybinhluan&query=lietke">Bình luận</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?dangxuat=1">Đăng xuất:
            <?php if(isset($_SESSION['dangnhap'])){
             echo $_SESSION['dangnhap'];
           } ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
     <!-- menu end -->