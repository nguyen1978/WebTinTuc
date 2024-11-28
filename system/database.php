<?php 
    class database {    
        public $cond;
       public function __construct(){  
        $connect = 'localhost';
        $user='root';
        $database="ptitcovid";
        $pass='';     
        $this->cond = new mysqli($connect,$user,$pass,$database);         
        }
        public function select($sql){
            $statement =mysqli_query($this->cond,$sql); 
            return $statement;
        }
        public function insert($table,$data){       
           $keys = implode(",",array_keys($data));
           $values=null;
            foreach($data as $key => $val){
                $val="'$val'";
                $values.=$val.",";
                
            }
            $values=rtrim($values,",");         
                $sql = "INSERT INTO $table($keys) VALUES($values)";
              $statement=$this->cond-> query($sql);     
               return $statement;                    
            }
        public function update($table, $data, $cond){       
           $values=null;
            foreach($data as $key => $val){
                $values.=$key."="."'$val'".",";
            }         
            $updatekey=rtrim($values,',');
            $sql ="UPDATE $table SET $updatekey WHERE $cond";
            $statement = $this->cond-> query($sql);
           
         return $statement ;
        }  
        public function delete($table,$cond,$limit=1){          
            $sql ="DELETE  FROM $table WHERE $cond LIMIT $limit";       
         return $this-> cond->query($sql);
        }  
        public function affectedRows($sql){
           $result = mysqli_query($this->cond,$sql); 
            $cot = mysqli_num_rows($result);    
            return $cot;
         }
        public function selectuser($sql){
            $statement = mysqli_query($this->cond,$sql);
           
            return mysqli_fetch_array($statement);
        }
        
    }
?>