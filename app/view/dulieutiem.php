<div id="content" class="container">
      <div id="dulieutiem" class="container table-bordered table-responsive-md" >
         <div class="marchung gachchan"><h4><b class="titleBack">Dữ liệu tiêm của Sinh viên</b></h4></div> 
         <div class=" row"style="text-align: center;">
             <div  class="col-12 col-sm-4 ">
              
                 <p class=" cangiua"><b>Số mũi đã tiêm toàn quốc</b></p>
                 <p class=" cangiua" ><i style="font-weight: bolder;color: rgb(231, 46, 46);font-size: 25px;" class="fas fa-syringe"></i><b>56.400.0000 ( mũi )</b>  </p>

              
          </div>
          <?php
          $i=0;
            foreach($user as $key => $val1){
              $i++;
          ?>
              <?php
            }
            ?>
          <div class="col-12 col-sm-4 ">
            <p  class=" cangiua"><b>Tổng số sinh viên học viện</b></p>
            <p  class=" cangiua"><i style="font-weight: bolder;color:#eb8d2c;font-size: 25px;" class="fas fa-user-graduate"></i><b>   <?php echo $i; ?> ( sinh viên ) </b>  </p>
     
     </div>
     <?php
          $a=0;
            foreach($dulieutiem as $key => $val){
            if(strcmp($val["Lotrinhtiem"],"Đã tiêm đủ 2 mũi")==0){
              $a++;
            }}
          ?>
             <div class="col-12 col-sm-4">
                 <p class=" cangiua"><b>Số sinh viên đã tiêm</b></p>
                 <p class=" cangiua"><i style="font-weight: bolder;color: rgb(79, 212, 26);font-size: 25px;" class="fas fa-user-shield"></i><b>   <?php echo $a; ?> ( sinh viên ) </b> </p>
             </div>
         </div>
      </div>
  <div class="container table-bordered marchung" style="text-align: center;">
    <div class="marchung gachchan"><h4><b class="titleBack">VIDEO</b></h4></div> 
    <iframe width="100%" height="500vh" src="https://www.youtube.com/embed/L_cNoOo7ll0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>