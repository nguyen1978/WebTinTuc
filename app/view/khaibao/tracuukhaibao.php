<?php if(isset($_GET['msg'])){
    if($_GET['msg']==15){
        echo "<script>swal('vui lòng nhập mã sinh viên')</script>";
    }
} ?>

<div style="margin: 5% auto;margin-bottom:9% ;" class=" container">
<p style="font-size: 20px!important;margin-bottom: 3%;">Tra cứu khai báo y tế sinh viên</p>
<div class="row">
  <div class="col-12 col-sm-4 ">
  <form action="" method="POST">
      <div class="form-group">
            <label for="uname">Mã Sinh Viên:</label> <br>
            <input  type="text"  name="Tensinhvien" id="timkiem" class=" form-control" placeholder="Nhập tên sinh viên cần tra cứu" >
           
          </div>
        
  </form>
        
         
  </div>
  <div class="col-12 col-sm-8 ">
      <h3>Danh sách tìm kiếm</h3>
      <table class="table table-hover table-striped text text-center table-bordered ">
        <thead>
          <th>Tên sinh viên</th>
          <th>Mã sinh viên</th>
          <th>Xem khai báo</th>
        </thead>
        <tbody class="text text-center" id="ketqua">
        </tbody>
      </table>
  </div>
  <a href="<?php echo BASE_URL ?>index"><button style=" margin-bottom: 3%;" class="btn btn-success">Trở về</button></a>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#timkiem").keyup(function(){
      var search = $("#timkiem").val();
      if(search !=''){
        $.ajax({
          url:"<?=BASE_URL?>/khaibao/tracuu",
          type:"POST",
          data:{
            search:search
          },
          success:function(data){
            $('#ketqua').html(data)

          }
        })
      }
    })
  })
  
</script>
</div>
