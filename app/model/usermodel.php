<?php 
    class usermodel extends dmodel{
        public function __construct()
        {
            parent:: __construct();
        }
        public function loginuser($table,$username,$pass){
            $sql="SELECT * FROM $table WHERE Idtaikhoan='".$username."' AND Pass='".$pass."' limit 1";
            return $this ->db -> affectedRows($sql,$username,$pass);
        }
        public function getloginUser($table,$username, $pass){
          $sql="SELECT * FROM $table WHERE Idtaikhoan='".$username."' AND Pass='".$pass."' limit 1"; 
            return $this ->db -> selectuser($sql,$username,$pass);
          }
          public function Userdetail($tbl_customer,$cond){
            $sql ="SELECT * FROM $tbl_customer WHERE $cond";
            return $this->db-> select($sql);
          }
          public function updatecustomer($tbl_customer,$data,$cond){
            return $this->db->update($tbl_customer,$data,$cond);
          } 
          public function getuser($table,$cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db-> select($sql);
      }
          //-----------------user khai bao-----------------------
          public function khaibao($table,$data){
            return $this -> db ->insert($table,$data);

          }
          public function dulieutiem($table){
            $sql="SELECT * FROM $table";
            return $this -> db -> select($sql);
          }
          public function danhsachkhaibao($table,$cond){
                $sql="SELECT * FROM $table WHERE $cond";
                return $this ->db-> select($sql);
          }
          public function chitietkhaibao($table,$cond){
                $sql ="SELECT * FROM $table WHERE $cond";
                return $this ->db-> select($sql);
          }
          public function updatekhaibao($table,$data,$cond){
            return $this->db->update($table,$data,$cond);

          }
          public function tracuukhaibaoyte($a){
            $sql = "SELECT * FROM taikhoan WHERE taikhoan.Hovaten LIKE '%$a%'";
            return $this -> db -> select($sql);
          }
          public function Xemkhaibao($taikhoan,$khaibao,$cond){
            $sql = "SELECT * FROM $taikhoan,$khaibao WHERE $cond AND $taikhoan.UserID = $khaibao.UserID";
            return $this -> db -> select($sql);
          }
          



    }
?>