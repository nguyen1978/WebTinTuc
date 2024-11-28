<?php 
    class dmodel{    
       protected $db=array();
       public function __construct(){
        // $connect = 'mysql:dbname=pdo_income; host=localhost';
        // $user='root';
        // $pass='';
           $this->db=new database();
        }
    }
?>