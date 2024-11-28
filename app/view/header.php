<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>style.css">
    <link rel="shortcut icon" href="http://localhost/PTIT/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL ?>OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?php echo BASE_URL ?>OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script>
   $(document).ready(function() {
    $('#slider .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items: 1,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    },
    )
});
</script>
    <title>Tin Tức</title>
    <?php if(isset($_GET['msg'])){
  $name = session::get("Hovaten");
    if($_GET['msg']==1){
        echo "<script>swal('Cập nhật tài khoản thành công')</script>";
    }
    if($_GET['msg']==2){
      echo " <script>swal('Xin chào $name ')</script>";
  }
  if($_GET['msg']==3){
    echo "<script>swal('Đăng xuất thành công')</script>";
}
} 
?>
</head>

<body>
  <div class="main">
    <div class="">
      <nav id="nav-header" class="navbar navbar-expand-lg navbar-dark ">
          <a class="tieude text-white navbar-brand col-lg-6" href="http://127.0.0.1:5500/index.html"><img src="<?php echo BASE_URL ?>image/logo2.png" alt=""> DHCT-EndCovid </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

     
      
        <div class="collapse navbar-collapse col-lg-6 " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto text-danger ">
            <li class="nav-item ">
              <a class="nav-link text-white hover" href="<?php echo BASE_URL ?>index">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-white hover" href="#">Đăng ký lịch tiêm</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-white hover" href="<?php echo BASE_URL ?>user/userkhaibao/<?php echo session::get('UserID') ?>">Khai báo y tế</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tra cứu
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASE_URL ?>khaibao/tracuukhaibao">Tra cứu khai báo y tế sinh viên</a> 
                <?php
                  if(session::get('taikhoan')==true){
                ?>
                <a class="dropdown-item" href="<?php echo BASE_URL ?>user/chitietkhaibao/<?php echo session::get("UserID"); ?>">Tra cứu khai báo y tế cá nhân</a> 
                <?php }?>              
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white hover" href="<?php echo BASE_URL ?>tailieu/usertailieu">Tài liệu <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
            <?php 
              
                if(session::get('taikhoan')==true){
                  
               $ten=explode(" ",session::get("Hovaten")); 
                 
                  ?>
          
            <a class="nav-link text-white dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i><?php echo" ".end($ten)?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASE_URL ?>user/xemthongtin/<?php echo session::get("UserID") ?>">Thông tin cá nhân</a> 
                <?php
                if(session::get("role")==1){
                ?>
                <a class="dropdown-item" href="<?php echo BASE_URL ?>danhmucbaiviet/danhsach">Quản lý danh mục</a>
                <a class="dropdown-item" href="<?php echo BASE_URL ?>baiviet/danhsachbaiviet">Quản lý bài viết</a> 
                <a class="dropdown-item" href="<?php echo BASE_URL ?>tailieu/quanlitailieu">Quản lý tài liệu</a> 

                <?php }
                ?>              
                <a class="dropdown-item" href="<?php echo BASE_URL ?>user/dangxuat">Đăng xuất</a>          
              </div>
              <?php
                }else{
              ?>
              <a class="nav-link text-white dropdown-toggle hover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </i><i class="fas fa-user"></i>
              </a>
              
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item login-btn" href="#">Đăng nhập</a>          
              </div>
              <?php 
                }
              ?>
              
              </li>

               
                
          
            
             
              
          </ul>
          <form action="<?php echo BASE_URL?>timkiem/timkiem"  method="POST" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 " name="timkiem" type="text" placeholder="Tìm kiếm....">           
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm Kiếm</button>
          </form>
        </div>
      </nav>
    </div>