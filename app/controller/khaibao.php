<?php
class khaibao extends dcontroller{
    public function __construct()
    {
        parent:: __construct();
    }
    public function index(){
        
    }
    public function tracuukhaibao(){
        $this->load->view("header");
        $this->load->view("khaibao/tracuukhaibao");
        $this->load->view("footer");
    }
    public function tracuu(){
        if(isset($_POST["search"])){
            $a=$_POST["search"];
            $user = $this ->load-> model("usermodel");
                $data['danhsachkq'] = $user ->tracuukhaibaoyte($a);
                if( $data['danhsachkq']!=null){
                    foreach( $data['danhsachkq'] as $key => $value){
    
                        ?>
                           <tr>
                    <td><?=$value['Hovaten']?></td>
                    <td><?=$value['Idtaikhoan']?></td>
                    <td ><a href="<?php echo BASE_URL ?>khaibao/xemkhaibao/<?=$value['UserID']?>"><i title="Xem khai báo" class="fas fa-eye"></i></a></td>
                  </tr>
                  <?php
                    }
                }else{
                    echo"Không tìm thấy";
                }
            }
         
    }
    
    public function xemkhaibao($id){
        $cond = "khaibao.UserID = $id";
        $user = $this ->load-> model("usermodel");
        $taikhoan = "taikhoan";
        $khaibao= "khaibao";
        $data['chitiet']= $user -> Xemkhaibao($taikhoan,$khaibao,$cond);
        $this->load->view("header");
        $this->load->view("khaibao/khaibaosv",$data);       
        $this->load->view("footer");

    }  
    
   
}
?>