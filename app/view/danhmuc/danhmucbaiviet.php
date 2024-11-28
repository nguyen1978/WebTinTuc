
<div  class="container " style="margin-bottom: 5%;margin-top: 3%;">
    <div class="row">
 <div class="col-sm-4">  
        
    <h3 style="margin: 5% auto;">Thêm danh mục </h3>
    <form action="<?php echo BASE_URL ?>danhmucbaiviet/themdanhmuc" method="POST">
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input name="Tendanhmuc" class="form-control" type="text" placeholder="Nhập tên danh mục" required>
        </div>
        <div class="form-group">
            <label for="Mota">Mô tả</label>
            <input type="text" name="Mota" class="form-control" placeholder="Nhập mô tả" required>
        </div>
        <button type="submit" name="Them" class="btn btn-success">Thêm</button>
    </form>
    
 </div>
<div class=" col-sm-8">
<h3 style="margin: 2% auto;">
        Danh mục bài viết
    </h3>
    <table style="border: 1px solid #ced4da;" class="table table-bordered table-hover table-striped text-center table-while">
        <thead>
            <th>STT</th>
            <th>Tên danh mục bài viết</th>
            <th>Mô tả </th>
            <th>Thao tác</th>
            
        </thead>      
        <tbody>
        <?php 
        $i=0;
foreach($danhmuc as $key => $value){
   
    
    $i++;

?>
        <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value['Tendanhmuc']; ?></td>
                <td><?php echo $value['Mota']; ?></td>
                <td><a class="btn-sua" href="<?php echo BASE_URL?>danhmucbaiviet/suadanhmuc/<?php echo $value["Iddanhmuc"]; ?>"><i title="sửa" class="fas fa-tools"></i></a> / <a href="<?php echo BASE_URL ?>danhmucbaiviet/xoadanhmuc/<?php echo $value['Iddanhmuc']?>"> <i title="xóa" class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
?>
        </tbody>

    </table>
</div>
    </div>

</div>


</div>

