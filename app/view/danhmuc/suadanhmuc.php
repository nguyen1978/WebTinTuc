
<div style="margin: 3% auto;" class="container">
    <h3 style="margin: 5% auto;">Cập nhật danh mục </h3>
    <?php 
        foreach($danhmucbaivietID as $key => $value){
    ?>
    <form style="width: 80%;margin:auto 10%;" action="<?php echo BASE_URL ?>danhmucbaiviet/capnhatdanhmuc/<?php echo $value['Iddanhmuc']?>" method="POST">
        <div class="form-group">
            <label for="Tendanhmuc">Tên danh mục</label>
            <input value="<?php echo $value['Tendanhmuc'] ?>" name="Tendanhmuc" class="form-control" type="text" placeholder="Nhập tên danh mục" required>
        </div>
        <div class="form-group">
            <label for="Mota">Mô tả</label>
            <input value="<?php echo $value['Mota'] ?>" type="text" name="Mota" class="form-control" placeholder="Nhập mô tả" required>
        </div>
        <button type="submit" name="Them" class="btn btn-success">Cập nhật</button>
    </form>
    <?php
    }
    ?>
</div>