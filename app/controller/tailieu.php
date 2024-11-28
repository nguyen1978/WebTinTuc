<?php
class tailieu extends dcontroller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){

    }
    public function quanlitailieu(){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $table = "tailieu";
        $doc = $this -> load-> model("categorymodel");
        $data["dstailieu"]=$doc -> listtailieu($table);
        $this -> load -> view("header");
        $this -> load -> view("tailieu/danhsachtailieu",$data);
        $this -> load -> view("lienhe");
        $this -> load -> view("footer");
    }
    public function usertailieu(){
        $table = "tailieu";
        $doc = $this -> load-> model("categorymodel");
        $data["dstailieu"]=$doc -> listtailieu($table);
        $this -> load -> view("header");
        $this -> load -> view("tailieu/tailieu",$data);
        $this -> load -> view("lienhe");
        $this -> load -> view("footer");
    }
    public function themtailieu(){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $table = "tailieu";
        $doc = $this -> load-> model("categorymodel");
        $ten =$_POST["Tentailieu"];
        $link=$_FILES["link"]["name"];
        $tmp_image=$_FILES["link"]["tmp_name"];
        $div= explode(".",$link);
        $file_ext=strtolower(end($div));
        $file=$div[0].time().".".$file_ext;

        $vitriuu="public/tailieu/".$file;
        $data=array(
            "Tentailieu"=>$ten,
            "link"=>$file,

        );
        $result= $doc->inserttailieu($table,$data);
        if($result==1){
            move_uploaded_file($tmp_image,$vitriuu);
            header("Location:".BASE_URL."tailieu/quanlitailieu");

        }

    }
    public function download(){
        if(!empty($_GET["file"])){
            $filename = basename(($_GET['file']));
            $filepath="public/tailieu/".$filename;
            if(!empty($filename) && file_exists($filepath)){
                header('Cache-Control: public');
                header('Content-Description: File Transfer');
                header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
                header('Content-Type: application/msword');
                header("Content-Transfer-Emcoding: binary");
                readfile($filepath);
                exit;
            }else{
                echo"khong tim thay";
            }

        }

    }
    public function xoatailieu($id){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $table =" tailieu";
        $cond="Idtailieu=$id";
        $doc = $this -> load -> model("categorymodel");
        $data['chitiet']= $doc -> edittailieu($table,$cond);
        foreach($data['chitiet'] as $key =>$value){
            $linh = $value['link'];
        }
        $result = $doc -> deletedoc($table,$cond);

        if($result ==1){
            header("Location:".BASE_URL."tailieu/quanlitailieu");
            unlink("public/tailieu/".$linh);
        }
    }
    public function updatetailieu($id){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
            $table =" tailieu";
            $cond="Idtailieu=$id";
            $doc = $this -> load -> model("categorymodel");
            $ten =$_POST["tentl"];
        $link=$_FILES["linhh"]["name"];
        $tmp_image=$_FILES["linhh"]["tmp_name"];
        $div= explode(".",$link);
        $file_ext=strtolower(end($div));
        $file=$div[0].time().".".$file_ext;

        $vitriuu="public/tailieu/".$file;
        $data['chitiet']= $doc -> edittailieu($table,$cond);
        foreach($data['chitiet'] as $key =>$value){
            $linh = $value['link'];
        }
        $data=array(
            "Tentailieu"=> $ten,
            "link"=>$file
        );
        $result = $doc -> updatetailieu($table,$data,$cond);
        if($result==1){
            unlink("public/tailieu/".$linh);
            move_uploaded_file($tmp_image,$vitriuu);
            header("Location:".BASE_URL."tailieu/quanlitailieu");
        }

    }
    public function edittailieu($id){
        session::checksession();
        if(session::get("role")==0){
            header("Location:".BASE_URL."index");
        }
        $table =" tailieu";
        $cond="Idtailieu=$id";
        $doc = $this -> load -> model("categorymodel");
        $data['chitiet']= $doc -> edittailieu($table,$cond);
        $this->load->view("header");
        $this->load->view("tailieu/suatailieu",$data);
        $this->load->view("footer");


    }
} 
?>