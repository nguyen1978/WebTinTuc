
    <div >
      
      <footer id="footer-seecsion" class="bg-light text-center text-lg-start">
   
        <div class="container p-12">
        
          <div class="row">
          <div style="margin: 10px 0;" class="col-md-4">
            <img src="<?php echo BASE_URL ?>image/logo2.png" alt="">
            <p class="text-center">Bản quyền thuộc Đại học Cần Thơ <br> Khoa Công Nghệ Thông Tin Và Truyền Thông <br>
              Khu 1 :  tọa lạc tại số 411 đường 30/4, phường Hưng Lợi, quận Ninh Kiều, thành phố Cần Thơ. <br>
              Khu 2 : tọa lạc trên đường 3/2, phường Xuân Khánh, quận Ninh Kiều, thành phố Cần Thơ. <br>
              Khu 3 : tọa lạc tại số 1 đường Lý Tự Trọng, phường An Phú, quận Ninh Kiều, thành phố Cần Thơ. <br>
              
          
          </div>
          <div class="col-md-4">
            <h3 style="margin: 14px 0;">Địa chỉ liên hệ</h3>
            <p class="text-center">Email: dhct@ctu.edu.vn <br> Đường dây nóng: (84-292) 3832663.<br> </p>
          
          </div>
          <div class="col-md-4">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8415184086443!2d105.76842661479444!3d10.029933692830593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1641826737063!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
             <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1bhL0QOJQMXNfXtZ60fZ-mn4CfoA&ehbc=2E312F" width="640" height="480"></iframe> -->
          
          </div>
        </div>
          
      
        
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Hotline    <i class="fas fa-phone"></i>  : (84-292) 3832663
         
        </div>
      
      </footer>
    </div>
<!------------------------------------------------------------------giao dien dang nhap------------------------>
<div class="modal">
  <div class="login">
    <div class="modal-close"> 
      <i id="close" class="fas fa-window-close"></i>
    </div>
    <div class="logodangnhap">
      <img src="<?php echo BASE_URL ?>image/logo2.png" alt="">
      <h5>Đại Học Cần Thơ Khoa Công Nghệ Thông Tin Và Truyền Thông</h5>
    </div>
    <form action="<?php echo BASE_URL ?>user/loginUser" method="POST">
      <div>
        <div class="user">
          <label for="uname">Tài khoản:</label>
          <input name="username" type="text" class="" id="uname" placeholder="Nhập tài khoản" name="uname" required>   
        </div>
        <div class="pass">
          <label for="pass">Mật khẩu:</label>
          <input name="password" type="password" class="" id="pass" placeholder="Nhập mật khẩu" name="uname" required>   
        </div>
        <div class="dangnhap">
          <button class="btn btn-success" type="submit">Đăng nhập</button>   
        </div>
      </div>
    </form>
  </div>
</div>






<div class="quay" style="height: 11%; width: 11%;">
   <div id="lienhe">
     <a class="lienhe-content" href="https://www.facebook.com/CTUDHCT">Liên hệ với học viện</a>
    </div>

 </div>
 <script>
   const login_btn = document.querySelector(".login-btn");
   const modal = document.querySelector(".modal");
   const modal_close = document.querySelector(".modal-close");
   function show(){
     modal.classList.add("open")
   }
   function close(){
     modal.classList.remove("open")
   }
   login_btn.addEventListener("click", show);
   modal_close.addEventListener("click",close);

 </script>
  <script>
   const khaibao_btn = document.querySelector(".chinhsua");
   const modal = document.querySelector(".khaibaoyte");
   const modal_close = document.querySelector(".modal-close");
   function show(){
     modal.classList.add("open")
   }
   function close(){
     modal.classList.remove("open")
   }
   khaibao_btn.addEventListener("click", show);
  //  modal_close.addEventListener("click",close);

 </script>
<script>
  $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:2,
          nav:false
      },
      1000:{
          items:3,
          nav:true,
          loop:false
      }
  }
})
</script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script>
                        CKEDITOR.replace( 'editor' );
                </script>

</body>

</html>