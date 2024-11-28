<?php 
    class main{
       public $url;
       public $controllername = 'index';
       public $methodname =  'index';
       public $controllerpath = 'app/controller/';
       public $controller;
       public function __construct(){
            session::init(); 
            $this->getUrl();
            $this->loadcontroller();
            $this->callmethod();
       }
     
       public function getUrl(){
        $this->url= isset($_GET['url'])? $_GET['url'] : NULL ;
        if($this->url!=NULL){
            $this->url=rtrim($this->url,'/');
            $this->url=explode('/',filter_var($this->url, FILTER_SANITIZE_URL)); 
          
        }else{
            unset($this->url);
        }
       }

  
       public function loadcontroller(){
           if(!isset($this->url[0])){
               include $this->controllerpath.$this->controllername.'.php';
               $this->controller = new $this->controllername();
           }else{
               $this -> controllername = $this->url[0];
               $filename = $this->controllerpath.$this->controllername.'.php'; 
               if(file_exists($filename)){
                   include $filename;
                   if(class_exists($this->controllername)){
                       $this->controller= new $this->controllername();
                   }else{

                   }
               }else{
                   
               }

           }

       }
       public function callmethod(){
           if(isset($this->url[2])){
               $this->methodname =$this->url[1];
               if(method_exists($this->controllername,$this->methodname)){
                    $this->controller->{$this->methodname}($this->url[2]);

               }else{
                    header("Location:".BASE_URL."index");
               }
           }else{
               if(isset($this->url[1])){
                   $this->methodname=$this->url[1];
                   if(method_exists($this->controllername,$this->methodname)){
                    $this->controller->{$this->methodname}();

               }else{
                    header("Location:".BASE_URL."index");
               }
               }else{              
                    if(method_exists($this->controllername,$this->methodname)){
                     $this->controller->{$this->methodname}();
 
                }else{
                     header("Location:".BASE_URL."index");
                }
                
               }
           }
       }
           
       
          
        
    }
?> 