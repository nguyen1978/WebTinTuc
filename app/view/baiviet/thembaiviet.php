
<div  class="container-fluid " style="margin: 5% auto;width: 80%;">
    <div class="row">
 <div class="col-sm-3">  
        
    <h3 style="margin: 5% auto;">Thêm Bài viết </h3>
    <form action="<?php echo BASE_URL ?>baiviet/thembaiviet" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên bài viết</label>
            <input name="tenbaiviet" class="form-control" type="text" placeholder="Nhập tên danh mục" required>
        </div>
        <div class="form-group">
            <label for="Mota">Hình Ảnh</label>
            <input type="file" name="hinhanh" class="form-control" placeholder="Nhập mô tả..." required>
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea class="form-control" style="border: 1px solid #ced4da;" class="col-12" name="noidung" id="editor"  rows="4">

            </textarea>
        </div>
        <div class="form-group">        
            <Select name="danhmuc" class="form-control" style="border: 1px solid #ced4da;padding: 0.375rem 0.75rem;">
                <option value="">Chọn danh mục</option>
                <?php
                foreach($danhmuc as $key => $value){
                ?>
                <option value="<?php echo $value["Iddanhmuc"] ?>"><?php echo $value['Tendanhmuc']; ?> </option>
                <?php
                }
                ?>
            </Select>

            </textarea>
        </div>
        <button type="submit" name="Them" class="btn btn-success">Thêm</button>
    </form>
    
 </div>