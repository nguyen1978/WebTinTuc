<div class="suatailieu container">
        <div style="margin-top:12px; margin-bottom: 45px; position: relative;">

        <h2 style="margin: 5% auto;">Cập nhật tài liệu </h2>
        <?php 
        foreach($chitiet as $key => $tailieu){
        ?>
    <form action="<?php echo BASE_URL ?>tailieu/updatetailieu/<?php echo $tailieu["Idtailieu"] ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên tài liệu</label>
            <input name="tentl" class="form-control" value="<?php echo $tailieu["Tentailieu"]; ?>" type="text" placeholder="Nhập tên danh mục" required>
        </div>
        <div class="form-group">
            <label for="Mota">Chọn tài liệu</label>
            <p><?php echo $tailieu["link"] ?></p>
            <input type="file" name="linhh" class="form-control" placeholder="Nhập mô tả" required>
        </div>
        <button type="submit" name="Them" class="btn btn-success">Cập nhật</button>
    </form>
    <?php
        }
    ?>
        </div>
</div>