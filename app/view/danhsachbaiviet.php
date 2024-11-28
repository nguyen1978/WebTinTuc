<div class="tinhinhDienbien container table-bordered">
       <div class="row">
        <div id="tinhhinh" class="col-12 col-sm-8  ">
          <div class="marchung gachchan"><h4><b class="titleBack">Bản tin covid</b></h4></div> 
          <div class="row">
            <div style="height: 100vh; overflow-y: scroll;" class="col-12">
                <div class="col-12 ">
                    <?php  
                    foreach($baiviet as $key => $value){
                        if(strcmp($value["Tendanhmuc"],"Bản tin covid")==0){
                    ?>
                    <div class="marcontent row border-bottom hover ">
                     <div class="col-sm-5">
                       <img width="100%" style="max-height: 167px;" class="img-content" src="<?php echo BASE_URL ?>public/post/<?php echo $value["Hinhanh"]; ?>" alt="">
                     </div>
                     <div class="col-12 col-sm-7 ">
                       <a href="<?php echo BASE_URL ?>baiviet/baivietid/<?php echo $value["Id"] ?>"><p style="font-size: 18px !important;"><?php echo $value["Tenbaiviet"];?> </p></a>
                       <div style="font-weight: 400 !important; word-spacing: 2px; letter-spacing: 1px;">
                       <p style="font-family: fangsong;"><?php print(mb_substr($value["Noidung"],0,300,'UTF-8')."...");?></p>
                  </div>
                       
                     </div>
                    </div>
                    <?php 
                     } }
                    ?>
                  
             </div>
      
          </div>  

  
          </div>
     
          </div>
          <div id="dienbien" class="col-12 col-sm-4 " >
            <div class="marchung gachchan"><h4><b class="titleBack">Diễn biến dịch bệnh</b></h4></div> 
            <div class="row">
              <div style="height: 100vh; overflow-y: scroll;" class="col-12">
              <?php  
                    foreach($baiviet as $key => $value){
                        if(strcmp($value["Tendanhmuc"],"Diễn biến dịch bệnh")==0){
                    ?>
                <div>
                  <h5 > <?php echo $value["Tenbaiviet"] ?> </h5>
                  <div style="font-weight:400 !important; word-spacing: 3px;">
                      <p>
                                <?php echo $value["Noidung"] ?>
                    </p>
                  </div>
                </div>
                <?php 
                        }}
                        ?>
                <table class="table table-striped table-hover">
                  <thead>
                    <thead ><th colspan="2"><h6>Danh sách các số diện thoại bệnh viện </h6></th></thead>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bệnh viện Bạch Mai</td>
                      <td>02438693731</td>
                    </tr>
                    <tr>
                <td>Bện viện Ung Bướu</td>
                      <td> 02923817901</td>
                    </tr>
                    <tr>
                      <td>Bệnh viện Nhi Trung Ương</td>
                      <td>0372884712</td>
                    </tr>
                    <tr>
                      <td>Bệnh viện Phổi Trung Ương</td>
                      <td>0967941616</td>
                    </tr>
                    <tr>
                      <td>Bệnh viện Quân Y 121</td>
                      <td>02923811500</td>
                    </tr>
                    <tr>
                      <td>Bệnh viện Vinmec Hà Nội</td>
                      <td>0934472768</td>
                    </tr>
                    <tr>
                      <td>Bệnh viện Đa khoa tỉnh Đồng Nai</td>
                      <td>0819634807</td>
                    </tr>
                  </tbody>
                </table>
        
            </div>  
  
    
            </div>
          </div>

       </div>
      </div>

      <div id="camnang" class="container ">
        <div class="marchung gachchan  "><h4><b class="titleBack" >Cẩm nang y tế</b></h4></div> 
          <!-- Set up your HTML -->
          <div>
            <div class="owl-carousel owl-theme">
            <?php  
                    foreach($baiviet as $key => $value){
                        if(strcmp($value["Tendanhmuc"],"Cẩm nang y tế")==0){
                    ?>


            <div class="item camnanghover ">
              <a href="#">
              <img class="camnangyte maxsizeimg" src="<?php echo BASE_URL?>public/post/<?php echo $value["Hinhanh"]?>" alt="">
             
              </a>    
              <div class="tieeu">
                  <a style="color: white !important;" href="<?php echo BASE_URL ?>baiviet/baivietid/<?php echo $value["Id"] ?>"><h3><?php echo $value["Tenbaiviet"]; ?></h3></a>
              </div>
            </div>  
            <?php 
                        }}
                        ?>           
      </div>
        </div>

         
      </div>   
        

        <div id="thongtinhocvien" class="container table-bordered">
          <div class="marchung gachchan"><h4><b class="titleBack">Thông tin từ học viện</b></h4></div> 
          <div class="row tin ">
              <div class="col-12 ">
              <?php  
                    foreach($baiviet as $key => $value){
                        if(strcmp($value["Tendanhmuc"],"Thông tin từ học viện")==0){
                    ?>

                <div class="marchung row border-bottom hover ">
                  <div class="col-sm-3">
                    <img class="img-content" src="<?php echo BASE_URL?>public/post/<?php echo $value["Hinhanh"]?>"  alt="">
                  </div>
                  <div class="col-12 col-sm-9 ">
<a href="<?php echo BASE_URL ?>baiviet/baivietid/<?php echo $value["Id"] ?>"><p style="font-size: 18px !important;"><?php echo $value["Tenbaiviet"];?> </p></a>
                       <div style="font-weight: 400 !important; word-spacing: 2.5px; letter-spacing: 1.2px;">
                       <p style="font-family: fangsong;"><?php print(mb_substr($value["Noidung"],0,290,'UTF-8')."...");?></p>
                  </div>
                 </div>
                   </div>
                   <?php
                        }}
                 ?>
               <div class="phantrangcha">
                <ul class="pagination phantrang">
                  <li class="page-item"><a class="page-link" href="#">Trước</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                </ul>
               </div>    
           </div>
           
        </div>   
          </div>
     </div>