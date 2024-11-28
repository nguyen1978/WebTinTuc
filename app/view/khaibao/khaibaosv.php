
<div style="margin: 5% auto;" class="container">
<p style="margin:2% auto;font-size: 24px!important;"> Khai báo y tế sinh viên</p>
<form  action="<?php echo BASE_URL ?>user/userkhaibao/<?php echo session::get("UserID") ?>" class="was-validated" method="POST">
<div class="row"> 
  <?php foreach($chitiet as $key => $value){
  ?>
        <div class="col-sm-6">
        <p>Họ và tên : <?php echo $value['Hovaten'] ?> </p> <br>
        <div style="margin-bottom: 4%;" class="">
           <img class="rounded-thumbnail" src="<?php echo BASE_URL ?>public/avatar/<?php echo $value['avatar']?>" width="155" height="180" alt=""> <br>
         </div>
        <p>Mã sinh viên : <?php echo $value['Idtaikhoan'] ?> </p><br>
        <p>Ngày sinh : <?php echo $value['Ngaysinh'] ?></p><br>
        </div>
        <div class="col-sm-6">
        <p>Lớp : <?php echo $value['Lop'] ?></p><br>
        <p>Ngành : <?php echo $value['Nganhhoc'] ?></p><br>
        <p>Chức vụ : <?php 
        if($value["role"]==1){
            echo"Admin";
        }else{
            echo "Sinh viên";
        }
        ?></p><br>
        </div>
</div>
       

          <div class="form-group">
            <label for="uname">Lộ trình tiêm:</label> <br>
            <input class="form-control" type="text" id="chuatiem" name="lotrinh" value="<?php echo $value["Lotrinhtiem"] ?>">
          
          </div>
          <div class="form-group">
            <label for="uname">Tình trạng sức khỏe:</label> <br>
           <textarea class="form-control col-12" name="" id=""  rows="2"> <?php echo $value["Tinhtrangsuckhoe"] ?></textarea>
    
          </div>
          <?php
  }
          ?>


        </form>
        <a href="<?php echo BASE_URL ?>khaibao/tracuukhaibao"><button class="btn btn-success"> trở về</button></a>
</div>