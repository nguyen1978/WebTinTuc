<div style="margin: 5% auto;" class="container">
<?php if(isset($_GET['msg'])){
    if($_GET['msg']==11){
        echo "<script>swal('Khai báo thành công')</script>";
    }
    if($_GET['msg']==13){
      echo "<script>swal('Khai không thành công thành công')</script>";
  }
  if($_GET['msg']==14){
    echo "<script>swal('Bạn đã khai báo y tế trước đây. Vui lòng vào tra cứu để xem')</script>";
}
} ?>
<a href="<?php echo BASE_URL ?>index"><button style=" margin-bottom: 3%;" class="btn btn-success">Trở về</button></a>
<p style="margin:2% auto;font-size: 24px!important;"> Khai báo y tế sinh viên</p>
<form action="<?php echo BASE_URL ?>user/khaibao" class="was-validated" method="POST">
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
          <button type="submit" name="khaibao" class="btn btn-success">Khai báo</button>
        </form>
</div>