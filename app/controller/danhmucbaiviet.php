<?php 
    class danhmucbaiviet extends dcontroller {
        public function __construct()
        {
            parent::__construct();
            session::checksession();
            if(session::get("role")==0){
                header("Location:".BASE_URL."index");
            }
        }
        public function index(){
            $this ->themdanhmuc();
        }
        public function themdanhmuc(){
            $danhmuc = $this -> load -> model("categorymodel");
            $tbl_danhmuc="danhmucbaiviet";
            $tendanhmuc= $_POST['Tendanhmuc'];
            $mota =$_POST["Mota"];
            $data = array(
                "Tendanhmuc"=>$tendanhmuc,
                "Mota" => $mota
            );
            $result = $danhmuc -> Insertdanhmuc($tbl_danhmuc,$data);
            if($result==1){
                header("Location:".BASE_URL."danhmucbaiviet/danhsach");
            }
           
        }
        public function xoadanhmuc($id){
            $tbl_danhmuc="danhmucbaiviet";
            $danhmuc= $this->load->model("categorymodel");
            $cond = "danhmucbaiviet.Iddanhmuc='$id'";
            $result = $danhmuc -> Deletedanhmuc($tbl_danhmuc,$cond);
            header("Location:".BASE_URL."danhmucbaiviet/danhsach");
        }
        public function danhsach(){
           
            $tbl_danhmuc = "danhmucbaiviet";
            $danhmuc = $this -> load -> model("categorymodel");
            $data["danhmuc"] = $danhmuc->danhmucbaiviet($tbl_danhmuc);

            $this -> load -> view('header');
            $this -> load -> view("danhmuc/danhmucbaiviet",$data);
            $this ->load -> view("footer");
            
        }
        public function suadanhmuc($id){
            $tbl_danhmuc="danhmucbaiviet";
            $danhmuc = $this -> load-> model("categorymodel");
            $cond = "danhmucbaiviet.Iddanhmuc='$id'";
            $data['danhmucbaivietID'] = $danhmuc -> PostcategoryID($tbl_danhmuc,$cond);
            $this -> load -> view('header');
            $this -> load -> view("danhmuc/suadanhmuc",$data);
            $this ->load -> view("footer");
        }
        public function capnhatdanhmuc($id){
            $tbl_danhmuc="danhmucbaiviet";
            $cond = "danhmucbaiviet.Iddanhmuc='$id'";
            $danhmuc = $this -> load-> model("categorymodel");
            $tendanhmuc= $_POST['Tendanhmuc'];
            $mota =$_POST["Mota"];
            $data = array(
                "Tendanhmuc"=>$tendanhmuc,
                "Mota" => $mota
            );
            $result = $danhmuc -> Updatedanhmuc($tbl_danhmuc,$data,$cond);
            if($result==1){
                header("Location:".BASE_URL."danhmucbaiviet/danhsach");
            }
        }
      

    }
?>