<div class="content_tailieu">
    <div class="container">
        <div class="marchung gachchan"><h4><b class="titleBack">Bản tin covid</b></h4></div> 
        <div>Cần Thơ , 4/03/2022</div>
        <?php foreach($danhsach as $key => $value){
                     ?>
        <div class="row">

            <div class=" col-sm-8 chitietbaiviet">
                <div class="">
                  
                    <div class="marchung"><p style="font-size: 20px !important;"><?php echo $value["Tenbaiviet"] ?></p></div>
                        <div style="width: 100%;" >
                            <?php echo $value["Noidung"]; ?>
                        </div>
                            

             
                </div>
        
            </div>
            <div class=" col-sm-4 tinlienquan">
                <div class="marchung"><p style="font-size: 20px !important;">Tin liên quan</p></div>
                <div class="row ">
                    <div class="col-12 ">
                        <div>
                        <?php
                            foreach($baiviet as $key => $rel_post){
                              if($value["Iddanhmuc"]==$rel_post["Iddanhmuc"] && $value["Id"]!= $rel_post["Id"]){
                            
                        ?>
                            <div class="marchung row border-bottom hover ">
                              <div class="col-sm-5">
                                <img class="img-content" src="<?php echo BASE_URL ?>public/post/<?php echo $rel_post["Hinhanh"]; ?>"  alt="">
                              </div>
                              <div class="col-12 col-sm-7 ">
                                <a href="<?php echo BASE_URL ?>baiviet/baivietid/<?php echo $rel_post["Id"] ?>"><h4><?php echo $rel_post["Tenbaiviet"] ?></h4></a>
                              </div>
                             </div>

                             <?php 
                            }}
                             ?>
                            
                               </div>
                        </div>
                        <div class=" col-12">
                            <div>
                              <h5> Thông tin các ca mắc trong ngày </h5>
                              <p>
                                Tính từ 16h ngày 31/10 đến 16h ngày 01/11, trên Hệ thống Quốc gia quản lý ca bệnh COVID-19 ghi nhận 5.598 ca nhiễm mới, trong đó 03 ca nhập cảnh và 5.595 ca ghi nhận trong nước (tăng 91 ca so với ngày trước đó) tại 49 tỉnh, thành phố (có 2.321 ca trong cộng đồng).
            
            Các tỉnh, thành phố ghi nhận ca bệnh như sau: TP. Hồ Chí Minh (927), Bình Dương (682), Đồng Nai (657), Kiên Giang (469), Bạc Liêu (382), An Giang (215), Sóc Trăng (194), Bình Thuận (167), Đắk Lắk (164), Tiền Giang (163), Tây Ninh (157), Cần Thơ (149), Bà Rịa - Vũng Tàu (109), Long An (100), Hà Giang (98), Đồng Tháp (89), Trà Vinh (72), Bình Phước (72), Phú Thọ (70), Cà Mau (68), Ninh Thuận (62), Hà Nội (57), Vĩnh Long (50), Bắc Ninh (50), Hậu Giang (47), Bến Tre (37), Thanh Hóa (34), Kon Tum (29), Lâm Đồng (25), Hà Nam (23), Thừa Thiên Huế (22), Nghệ An (22), Khánh Hòa (21), Gia Lai (18), Quảng Ngãi (14), Quảng Nam (14), Quảng Bình (13), Nam Định (10), Bình Định (9), Bắc Giang (9), Phú Yên (5), Thái Nguyên (4), Lào Cai (4), Hà Tĩnh (3), Vĩnh Phúc (3), Quảng Trị (2), Tuyên Quang (2), Thái Bình (1), Hòa Bình (1).
                              </p>
                            </div>
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
        <?php }?>

    </div>
</div>