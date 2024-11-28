<!--danhsachbaiviet  -->
<div class=" col-sm-9">
<h3 style="margin: 2% auto;">
        Danh mục bài viết
    </h3>

    <table class="table table-bordered table-hover table-striped text-center table-while">
        <thead>
            <th>STT</th>
            <th>Tên bài viết</th>
            <th>Hình ảnh </th>
            <th>Danh mục </th>
            <th>Thao tác</th>
            
        </thead>      
        <tbody>
        <?php
        $i=0;
                foreach($danhsach as $key => $baiviet){
        $i++;
    ?>
         <tr>
             <td><?php echo $i; ?></td>
             <td><?php echo $baiviet['Tenbaiviet'] ?></td>
             <td><img src="<?php echo BASE_URL ?>public/post/<?php echo $baiviet["Hinhanh"] ?>" width="100" height="100" alt=""></td>
             <td><?php echo $baiviet['Tendanhmuc'] ?></td>
             <td><a href="<?php echo BASE_URL ?>baiviet/chinhsuabaiviet/<?php echo $baiviet['Id'] ?>"><i title="sửa" class="fas fa-tools"></i></a> / <a href="<?php echo BASE_URL ?>baiviet/xoabaiviet/<?php echo $baiviet['Id'] ?>"><i title="xóa" class="fas fa-trash-alt"></i></a></td>
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

