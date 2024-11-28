<div style="margin: 4% auto;" class="container">
    <div >
    <a href="<?php echo BASE_URL ?>index"><button style=" margin-bottom: 3%;" class="btn btn-success">Trở về</button></a>
    <h3>Danh sách tìm kiếm: </h3>
    <table class="table table-Striped table-hover ">
    <thead>
    <th>STT</th>
    <th>Tên bài viết</th>
    <th>Hình ảnh</th>
    <th>Thao tác</th>
    </thead>
    <tbody>
    <?php 
    $i=0;
    foreach($dstimkiem as $key => $val){
        $i++;
    ?>
    <tr>
    <td> <?php echo $i ?></td>
    <td><?php echo $val['Tenbaiviet'] ?></td>
    <td><img width="100" height="100" src="<?php echo BASE_URL ?>public/post/<?php echo $val['Hinhanh'] ?>" alt=""></td>
    <td><a href="<?php echo BASE_URL ?>baiviet/baivietid/<?php echo $val['Id'] ?>"> <i title="Xem" class="fas fa-eye"></i> </a> </td>
    </tr>
    <?php 
    }
    ?>
    </tbody>
    </table>
    </div>
</div>