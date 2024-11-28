
<div  class="container-fluid " style="margin-bottom: 3% ;width: 80%;">
    <div class="row">
 <div class="col-sm-12">  
        
    <h3 style="margin: 3% auto;">Cập nhật bài viết </h3>
    <?php 
            foreach($baiviet as $key => $value){

            
    ?>
    <form action="<?php echo BASE_URL ?>baiviet/capnhatbaiviet/<?php echo $value["Id"]; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên bài viết</label>
            <input value="<?php echo $value['Tenbaiviet']  ?>" name="tenbaiviet" class="form-control" type="text" placeholder="Nhập tên danh mục" required>
        </div>
        <div class="form-group">
            <label for="Mota">Hình Ảnh</label>
            <input type="file"  name="hinhanh" class="form-control" placeholder="Nhập mô tả..." >
            <p><img src="<?php echo BASE_URL?>public/post/<?php echo $value['Hinhanh']?>"height="100" width="100"></p>
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea class="form-control" style="border: 1px solid #ced4da;" class="col-12" name="noidung" id="editor"  rows="4">
<?php echo $value['Noidung']  ?>
            </textarea>
        </div>
        <div class="form-group">        
            <Select name="danhmuc" class="form-control" style="border: 1px solid #ced4da;padding: 0.375rem 0.75rem;">
               
                <?php
                foreach($danhmuc as $key => $alo){
                ?>
                <option <?php if($alo["Iddanhmuc"]==$value["Iddanhmuc"]){ echo"SELECTED"; } ?> value="<?php echo $alo["Iddanhmuc"] ?>"><?php echo $alo['Tendanhmuc']; ?> </option>
                <?php
                }
                ?>
            </Select>

            </textarea>
        </div>
        <button type="submit" name="Them" class="btn btn-success">Cập nhật</button>
    </form>
    <?php 
            }
           ?> 
 </div>
 </div>
</div>