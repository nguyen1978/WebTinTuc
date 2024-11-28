<?php
    class load{
        public function __construct(){

        }
        public function view($filename,$data=NULL){
            if($data){
                extract($data);
            }
            include "app/view/".$filename.".php";
        }
        public function model($filename){
            include "app/model/".$filename.".php";
            return new $filename();
        }

        
    }
?>