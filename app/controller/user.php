<?php 
class user extends dcontroller{
    public $data = array();
    public function __construct()
    {
        session::checksession();
        parent:: __construct();
    }
    public function index(){
        $this -> load -> view("header");
    }
    public function xemthongtin($id){
        $taikhoan = "taikhoan";
        $khachhang = $this -> load-> model("usermodel");
        $cond = "UserID = $id";
        $data["chitiet"] = $khachhang -> Userdetail($taikhoan, $cond);
        $this -> load -> view("header");
        $this -> load -> view("user/chinhsua",$data);
        $this -> load -> view("footer");
    }
    public function dangnhap(){

        $user =$this -> load -> model("usermodel");
        $table="taikhoan";
        $this -> load -> view('header',);                       
        $this -> load -> view('chinhsuauser');            
       $this -> load -> view('footer');

    }
    public function loginUser(){
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $user =$this -> load -> model("usermodel");
       $table="taikhoan";
       $count = $user -> loginUser($table,$username,$password);
        if($count==0){
            header("Location:".BASE_URL."index?msg=1");
        }else{
            $result= $user-> getloginUser($table,$username,$password);
            session::init();
            session::set('taikhoan',true);
            session::set('Hovaten',$result['Hovaten']);
            session::set('password',$result['password']);
            session::set('SDT',$result['SDT']);
            session::set('Lop',$result['Lop']);
            session::set('Nganhhoc',$result['Nganhhoc']);
            session::set('Diachi',$result['Diachi']);
            session::set('Ngaysinh',$result['Ngaysinh']);
            session::set('Email',$result['Email']);
            session::set('Idtaikhoan',$result['Idtaikhoan']);
            session::set('UserID',$result['UserID']);
            session::set('role',$result['role']);

            header("Location:".BASE_URL."index?msg=2");
        }
    }
    public function dangxuat(){
        session::unset("taikhoan");
        header("Location:".BASE_URL."index?msg=3");
    }
    public function capnhatuser($id){      
        $taikhoan = "taikhoan";
        $khachhang = $this -> load-> model("usermodel");
        $cond = "UserID = $id"; 
        $phone=$_POST["phone"];
        $mail=$_POST["email"];
        $diachi=$_POST["diachi"];
        $avatar =$_FILES['avatar']['name'];
        $tmp_image=$_FILES["avatar"]["tmp_name"];
        $div= explode(".",$avatar);
        $file_ext=strtolower(end($div));
        $anh=$div[0].time().".".$file_ext;

        $vitriuu="public/avatar/".$anh;
        if($avatar){
            $data=array(
                "SDT"=>$phone,
                "Email"=>$mail,
                "Diachi"=> $diachi,
                "avatar"=>$anh
            );
            move_uploaded_file($tmp_image,$vitriuu);
        }else{
            $data=array(
                "SDT"=>$phone,
                "Email"=>$mail,
                "Diachi"=> $diachi,

            );
        }
       
        $result = $khachhang-> updatecustomer($taikhoan,$data,$cond);
        if($result){
            $a = session::get("UserID");
            header('Location:'.BASE_URL.'user/xemthongtin/'.$a.'?msg=12' );
        }

    }
    //----------------------------------------------khaibao-----------------------------------------------------
    public function chitietkhaibao($id){

        $user = $this -> load-> model("usermodel");
        $cond = "UserID = $id";
        $taikhoan = "taikhoan";
        $data["chitiet"] = $user -> Userdetail($taikhoan, $cond);
        $table="khaibao";
       
        
        $data["chitietkhaibao"] = $user -> chitietkhaibao($table,$cond);
        $this -> load -> view("header");
        $this -> load -> view("khaibao/chitietkhaibao",$data);
        $this -> load-> view("footer"); 
    }
    public function userkhaibao($id){
        $taikhoan = "taikhoan";
        $khachhang = $this -> load-> model("usermodel");
        $cond = "UserID = $id";
        $data["chitiet"] = $khachhang -> Userdetail($taikhoan, $cond);
        $this -> load -> view('header',);                       
        $this -> load -> view('khaibao/khaibaoform',$data);            
       $this -> load -> view('footer');
    }
    public function update($id){
        $table = "khaibao";
        $cond = "UserID =$id";
        $user = $this -> load -> model("usermodel");      
        $a=session::get("UserID");
    
        if(isset($_POST["lotrinh"]) && isset($_POST["tinhtrang"])){

                    $lotrinh=$_POST["lotrinh"];
                    $tinhtrang=$_POST["tinhtrang"];
                        $tt = implode(";",$tinhtrang);
                        $data= array(
                            "Lotrinhtiem"=>$lotrinh,
                            "Tinhtrangsuckhoe"=> $tt,
                            "UserID"=> session::get("UserID"),
                
                        );
                        $result = $user ->  updatekhaibao($table,$data,$cond);
                        if($result==1){
                     
                            header("Location:".BASE_URL."user/chitietkhaibao/".$a);
                        }

        }else{
            header("Location:".BASE_URL."user/chitietkhaibao/".$a);
        }
    }
    public function khaibao(){
        $table = "khaibao";
        $user = $this -> load -> model("usermodel");      
        $a=session::get("UserID");
        $cond="UserID = $a";
        $data["danhsach"]=$user ->danhsachkhaibao($table,$cond);
       
        if(isset($_POST["lotrinh"]) && isset($_POST["tinhtrang"])){
            foreach($data["danhsach"] as $key => $value){
                $b=$value["UserID"];
            }
                if($b==$a){
                    header("Location:".BASE_URL."user/userkhaibao/".$a."?msg=14"); 
                }else{
                    $lotrinh=$_POST["lotrinh"];
                    $tinhtrang=$_POST["tinhtrang"];
                        $tt = implode(";",$tinhtrang);
                        $data= array(
                            "Lotrinhtiem"=>$lotrinh,
                            "Tinhtrangsuckhoe"=> $tt,
                            "UserID"=> session::get("UserID"),
                
                        );
                        $result = $user -> khaibao($table,$data);
                        if($result==1){
                     
                            header("Location:".BASE_URL."user/userkhaibao/".$a."?msg=11");
                        }
                }
            
           

        }else{
            header("Location:".BASE_URL."user/userkhaibao/".$a."?msg=13");
        }
       

       
    
    }
   
}
?>