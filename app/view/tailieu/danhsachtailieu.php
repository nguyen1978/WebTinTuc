

<div  class="container " style="margin-bottom: 5%;margin-top: 3%;">
    <div class="row">
 <div class="col-sm-4">  
        
    <h3 style="margin: 5% auto;">Thêm tài liệu </h3>
    <form action="<?php echo BASE_URL ?>tailieu/themtailieu" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên tài liệu</label>
            <input name="Tentailieu" class="form-control" type="text" placeholder="Nhập tên danh mục" required>
        </div>
        <div class="form-group">
            <label for="Mota">Chọn tài liệu</label>
            <input type="file" name="link" class="form-control" placeholder="Nhập mô tả" required>
        </div>
        <button type="submit" name="Them" class="btn btn-success">Thêm</button>
    </form>
    
 </div>
<div class=" col-sm-8">
<h3 style="margin: 2% auto;">
        Tài liệu
    </h3>
    <table style="border: 1px solid #ced4da;" class="table table-bordered table-hover table-striped text-center table-while">
   
        <thead>
            <th>STT</th>
            <th>Tên tài liệu</th>
            <th>link </th>
            <th>Thao tác</th>
            
        </thead>      
        <tbody>
        <?Php
    $i=0;
        foreach($dstailieu as $key => $value){
            $i++;

        
    ?>
        <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $value['Tentailieu'];?></td>
         <td><?php echo $value['link'];?></td>
         <td><a href="<?php echo BASE_URL ?>tailieu/edittailieu/<?php echo $value["Idtailieu"]; ?>"><i title="sửa" class="fas fa-tools"></i> </a> / <a href="<?php echo BASE_URL ?>tailieu/xoatailieu/<?php echo $value["Idtailieu"]; ?>"><i title="xóa" class="fas fa-trash-alt"></i></a></td>
     </tr>
     <?Php 
        }
?>
        </tbody>

    </table>
</div>
    </div>

</div>




