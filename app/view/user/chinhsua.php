<div style="margin: 3% auto;" class="container">
<?php if(isset($_GET['msg'])){
    if($_GET['msg']==12){
        echo "<script>swal('Cập nhật tài khoản thành công')</script>";
    }
} ?>
    
<h3 style="margin:2% auto;"  class="display-5"> Thông tin sinh viên</h3>
<?php 
foreach($chitiet as $key => $value){
?>
<form action="<?php echo BASE_URL ?>user/capnhatuser/<?php echo session::get('UserID');?>"  method="POST" enctype="multipart/form-data">
        <div class="row"> 
        <div class="col-sm-6">
        <p>Họ và tên : <?php echo $value['Hovaten'] ?> </p>
        <div style="margin-bottom: 4%;" class="">
           <img class="rounded-thumbnail" src="<?php echo BASE_URL ?>public/avatar/<?php echo $value['avatar']?>" width="155" height="180" alt=""> <br>
           <input style="margin-top: 3%;" type="file" name="avatar" >
         </div>
        <p>Ngày sinh : <?php echo $value['Ngaysinh'] ?></p><br>
        </div>     
        <div class="col-sm-6">
        <p>Mã sinh viên : <?php echo $value['Idtaikhoan'] ?> </p><br>
        <p>Lớp : <?php echo $value['Lop'] ?></p><br>
        <p>Ngành : <?php echo $value['Nganhhoc'] ?></p><br>
        <p>Chức vụ : <?php 
        if(session::get("role")==1){
            echo"Admin";
        }else{
            echo "Sinh viên";
        }
        ?></p><br>
        
         
        </div>
        </div>

        
          <div class="form-group">
            <label for="uname">Số điện thoại:</label>
            <input type="text" value="<?php echo $value['SDT'] ?>" class="form-control"  placeholder="Nhập số điện thoại..." name="phone" required>
             </div>
          <div class="form-group">
            <label for="uname">Email:</label>
            <input type="text" value="<?php echo $value['Email'] ?>" class="form-control"  placeholder="Nhập email liên hệ..." name="email" required>
             </div>
          <div class="form-group">
            <label for="uname">Quê quán:</label>
            <textarea class="col-12"  name="diachi" id="" rows="4"><?php echo $value['Diachi'] ?>
            </textarea>
            </div>
          <button type="" name="them" class="btn btn-success">Cập nhật</button>
        </form>
        <?php
         }
        ?>
</div>