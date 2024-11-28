<?php
    class index extends dcontroller{
        public $data = array();
        public function __construct()
        {
            parent:: __construct();
        }
        public function index(){
            $this -> home();
        }
        public function home(){
            $table3 = "khaibao";
            $table4='taikhoan';
            $user = $this ->load-> model("usermodel");
            $data['dulieutiem'] = $user -> dulieutiem($table3);
            $danhmuc = $this -> load-> model("categorymodel");
            $table = "danhmucbaiviet";
            $table2 = "baiviet";
            $data["baiviet"]=$danhmuc -> danhsachbaiviet($table2,$table);
            $data["danhmuc"]= $danhmuc -> danhmucbaiviet($table);
            $data['user'] = $user -> dulieutiem($table4);
            $this -> load -> view('header');        
            $this->load -> view("slide");
            $this -> load->view("dulieutiem",$data);
            $this -> load->view("danhsachbaiviet",$data); 
            $this -> load->view("lienhe");           
           $this -> load -> view('footer');
        }
       
    }
?>