<style>
    .khaibaoyte{
    color: white;    
    background: rgba(0,0,0,0.7);
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    display: flex;
    /* text-align: center; */
    align-items: center;
    justify-content: center;
    display: none;
    animation: modalfaded ease 0.5s;
}
.close_khaibao{
    
    position: absolute;
    top: 0;
    right: 0;
    padding: 5px;
}
.khaibaoyte.open{
    display: flex;
    z-index: 10;
}
@keyframes modalfaded{
    from{
        opacity: 0;
        transform: translateY(-140px) ;

    }
    to{
        opacity: 1;
        transform: translateY(0px);
    }}
</style>
<div style="margin: 5% auto;" class="container">
<p style="margin:2% auto;font-size: 24px!important;"> Khai báo y tế sinh viên</p>
<form  action="<?php echo BASE_URL ?>user/userkhaibao/<?php echo session::get("UserID") ?>" class="was-validated" method="POST">
<div class="row"> 
  <?php foreach($chitiet as $key => $value){
  ?>
        <div class="col-sm-6">
        <p>Họ và tên : <?php echo $value['Hovaten'] ?> </p> <br>
        <p>Mã sinh viên : <?php echo $value['Idtaikhoan'] ?> </p><br>
        <p>Ngày sinh : <?php echo $value['Ngaysinh'] ?></p><br>
        </div>
        <div class="col-sm-6">
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
        <?php
  }
  ?>
        </div>
      <?php foreach($chitietkhaibao as $key => $value){

      
      ?>
          <div class="form-group">
            <label for="uname">Lộ trình tiêm:</label> <br>
            <input class="form-control" type="text" id="chuatiem" name="lotrinh" value="<?php echo $value["Lotrinhtiem"] ?>">
          
          </div>
          <div class="form-group">
            <label for="uname">Tình trạng sức khỏe:</label> <br>
           <textarea class="form-control col-12" name="" id=""  rows="2"> <?php echo $value["Tinhtrangsuckhoe"] ?></textarea>
         <?php
         }
         ?>   
           
          </div>

         
        </form>
        
        <button class="chinhsua btn btn-success" name="khaibao" class="btn btn-primary">Chỉnh sửa</button>
<div class="khaibaoyte">

<div style="margin: 5% auto;" class="container">
<p style="margin:2% auto;font-size: 24px!important;"> Khai báo y tế sinh viên</p>
<div class="container" style="background-color: #eb8d2c;position: relative;">
<div class="close_khaibao">
    <i style="font-size: 25px!important" id="close" class="fas fa-window-close"></i>
    </div>
<form style="margin: 3% auto;padding: 2%;" class="container"  action="<?php echo BASE_URL ?>user/update/<?php echo session::get("UserID");?>" class="was-validated" method="POST">
<div class="row"> 
  <?php foreach($chitiet as $key => $value){
  ?>
        <div class="col-sm-6">
        <p>Họ và tên : <?php echo $value['Hovaten'] ?> </p> <br>
        <p>Mã sinh viên : <?php echo $value['Idtaikhoan'] ?> </p><br>
        <p>Ngày sinh : <?php echo $value['Ngaysinh'] ?></p><br>
        </div>
        <div class="col-sm-6">
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
        <?php
  }
  ?>
        </div>
      
          <div class="form-group">
            <label for="uname">Lộ trình tiêm:</label> <br>
            <input type="radio" id="chuatiem" name="lotrinh" value="Chưa tiêm">
            <label for="html">Chưa tiêm</label><br>
            <input type="radio" id="tiem1" name="lotrinh" value="Đã tiêm 1 mũi">
            <label for="css">Đã tiêm 1 mũi </label><br>
            <input type="radio" id="tiem2" name="lotrinh" value="Đã tiêm đủ 2 mũi">
            <label for="javascript">Đã tiêm đủ 2 mũi</label>
          </div>
          <div class="form-group">
            <label for="uname">Tình trạng sức khỏe:</label> <br>
            <input type="checkbox" id="dh1" name="tinhtrang[]" value="Đang ở vùng dịch hoặc từng đi qua vùng dịch">
            <label for="vehicle1">Đang ở vùng dịch hoặc từng đi qua vùng dịch</label><br>
            <input type="checkbox" id="dh2" name="tinhtrang[]" value="Có dấu hiệu ho, sốt, khó thở">
            <label for="vehicle2"> Có dấu hiệu ho, sốt, khó thở</label><br>
            <input type="checkbox" id="dh3" name="tinhtrang[]" value="Đau họng,mệt mỏi">
            <label for="vehicle3"> Đau họng,mệt mỏi</label><br>
            <input type="checkbox" id="dh4" name="tinhtrang[]" value="Mất vị giác hoặc khứu giác">
            <label for="vehicle2"> Mất vị giác hoặc khứu giác</label><br>
            <input type="checkbox" id="dh5" name="tinhtrang[]" value="Da nổi mẩn, nổi mề đay">
            <label for="vehicle2"> Da nổi mẩn, nổi mề đay</label><br>
            <input type="checkbox" id="dh5" name="tinhtrang[]" value="Sức khỏe bình thường, ổn định">
            <label for="vehicle2"> Sức khỏe bình thường, ổn định</label><br>
           
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="check" required> Tôi cam kết những điều trên là đúng sự thật và xin chịu hoàn toàn trách nhiệm trước pháp luật.
            </label>
          </div>
          <button type="submit" name="khaibao" class="btn btn-primary">Cập nhật</button>
        </form>
</div>

</div>
</div>
</div>
<script>
   const khaibao_btn = document.querySelector(".chinhsua");
   const modal = document.querySelector(".khaibaoyte");
   const close_khaibao = document.querySelector(".close_khaibao");
   function show(){
     modal.classList.add("open")
   }
   function close(){
     modal.classList.remove("open")
   }
   khaibao_btn.addEventListener("click", show);
   close_khaibao.addEventListener("click",close);

 </script>