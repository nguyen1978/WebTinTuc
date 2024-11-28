<?php class baiviet extends dcontroller {
    public function __construct()
    {
        parent:: __construct();
    }
    public function index(){
        $this -> danhsachbaiviet();
    }
    public function danhsachbaiviet(){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $tbl_danhmuc = "danhmucbaiviet";
        $table ="baiviet";
        $danhmuc = $this -> load -> model("categorymodel");
        $data["danhmuc"] = $danhmuc->danhmucbaiviet($tbl_danhmuc);
        $data["danhsach"] = $danhmuc->danhsachbaiviet($table,$tbl_danhmuc);
        $this -> load -> view('header');
        $this -> load -> view('baiviet/thembaiviet',$data);
        $this -> load -> view("baiviet/danhsachbaiviet",$data);
        $this -> load -> view("footer");
        
    }
    public function baivietid($id){
        
        $tbl_danhmuc = "danhmucbaiviet";
        $table ="baiviet";      
        $danhmuc = $this -> load -> model("categorymodel");
        $data["baiviet"] = $danhmuc->danhsachbaiviet($table,$tbl_danhmuc);
        $data["danhsach"] = $danhmuc->baivietlienquan($table,$tbl_danhmuc,$id);
        $this -> load -> view('header');
        $this -> load -> view('chitietbaiviet',$data);
        $this ->load -> view("lienhe");
        $this ->load -> view("footer");
        
    }
    public function thembaiviet(){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $baiviet =$this-> load-> model("categorymodel");
        $table ="baiviet";

        $tenbaiviet =$_POST['tenbaiviet'];
        $hinhanh = $_FILES["hinhanh"]["name"];
        $noidung = $_POST["noidung"];
        $danhmuc =$_POST["danhmuc"];

        $tmp_image=$_FILES["hinhanh"]["tmp_name"];
        $div= explode(".",$hinhanh);
        $file_ext=strtolower(end($div));
        $anh=$div[0].time().".".$file_ext;

        $vitriuu="public/post/".$anh;
        
        $data=array(
            "Tenbaiviet" => $tenbaiviet,
            "Hinhanh"=> $anh,
            "Noidung"=> $noidung,
            "Iddanhmuc"=>$danhmuc
        );
        $result =$baiviet -> Insertbaiviet($table,$data);
        if($result==1){
            move_uploaded_file($tmp_image,$vitriuu);
            header("Location:".BASE_URL."baiviet/danhsachbaiviet");

        }

        $this ->load-> view("header");
        $this ->load-> view("baiviet/danhsachbaiviet");
        $this -> load -> view("footer");
    }
   
    public function xoabaiviet($id){    
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }               
        $post = $this -> load -> model('categorymodel');             
        $table='baiviet';            
        $cond = "baiviet.Id='$id'";
        $link="public/post/";
        $data['baiviet'] = $post-> baivietbyid($table,$cond);  
       
       $result= $post ->deletepost($table,$cond); 
       foreach($data['baiviet'] as $key => $value){
        unlink($link.$value["Hinhanh"]);
    } 
       header("Location:".BASE_URL."baiviet/danhsachbaiviet");
        }
    public function chinhsuabaiviet($id){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $tbl_danhmuc = "danhmucbaiviet";
        $post = $this -> load -> model('categorymodel');             
        $table='baiviet';  
        $data["danhmuc"] = $post->danhmucbaiviet($tbl_danhmuc);
        $cond = "baiviet.Id='$id'";
        $data['baiviet'] = $post-> baivietbyid($table,$cond);  
        $this ->load-> view("header");
        $this ->load-> view("baiviet/chinhsuabaiviet",$data);
        $this -> load -> view("footer");
    } 
    public function capnhatbaiviet($id){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $baiviet =$this-> load-> model("categorymodel");
        $table ="baiviet";
        $link="public/post/";
        $cond = "baiviet.Id='$id'";

        $tenbaiviet =$_POST['tenbaiviet'];
        $hinhanh = $_FILES["hinhanh"]["name"];
        $noidung = $_POST["noidung"];
        $danhmuc =$_POST["danhmuc"];
        
        $tmp_image=$_FILES["hinhanh"]["tmp_name"];
        $div= explode(".",$hinhanh);
        $file_ext=strtolower(end($div));
        $anh=$div[0].time().".".$file_ext;

        $vitriuu="public/post/".$anh;
        if($hinhanh){
            $data['baiviet'] = $baiviet-> baivietbyid($table,$cond); 
            foreach($data['baiviet'] as $key => $value){
                unlink($link.$value['Hinhanh']);
            }
                $data=array(
                    "Tenbaiviet" => $tenbaiviet,
                    "Hinhanh"=> $anh,
                    "Noidung"=> $noidung,
                    "Iddanhmuc"=>$danhmuc
                );
                move_uploaded_file($tmp_image,$vitriuu);           
        }else{
            $data=array(
                "Tenbaiviet" => $tenbaiviet,
                "Noidung"=> $noidung,
                "Iddanhmuc"=>$danhmuc
            );

        }
        $result = $baiviet->updatepost($table,$data,$cond); 
        if($result){
            header('Location:'.BASE_URL."baiviet/danhsachbaiviet");  
        }
        
    }      
    
}