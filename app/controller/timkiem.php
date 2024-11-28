<?php
class timkiem extends dcontroller{
    public function __construct()
    {
        parent:: __construct();
    }
    public function timkiem(){
        $table="baiviet";
        $timkiem1 = $this-> load->model("categorymodel");
        if(isset($_POST['timkiem'])){
            $a= $_POST['timkiem'];
            $data['dstimkiem']= $timkiem1 -> timkiem($table,$a);
        
        $this->load->view('header');
        $this->load->view('timkiem/timkiem',$data);
        $this->load->view('footer');
        }else{
            header("Location:".BASE_URL."index");
        }
    }
}
?>