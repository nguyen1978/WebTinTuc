<div style="margin-bottom: 3%;" class="content_tailieu">
    <div class="container">
        <div class="marchung"><h3>Tài liệu</h3></div>
    <div>
        <table class="table table-striped table-responsive-md table-hover">
            <thead class="text text-center">
                <th>STT</th>
                <th>Tên tài liệu</th>
                <th><i class="fas fa-download"></i> Thao tác</th>
            </thead>
            <tbody class="text text-center">
            <?php 
            $i=0;
            foreach($dstailieu as $key => $value){
                $i++;
                $link = urldecode($value['link']);
                
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value["Tentailieu"]; ?></td>
                    <td><a href="<?php echo BASE_URL ?>tailieu/download?file=<?php echo $value['link'] ?>">Tải về</a></td>
                </tr>
               <?php
                }
               ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo BASE_URL ?>index"><button style=" margin-bottom: 3%;" class="btn btn-success">Trở về</button></a>
    </div>
    
</div>

