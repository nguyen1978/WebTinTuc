<?php
class categorymodel extends dmodel{
    public function __construct()
    {
        parent:: __construct();
    }
    //------------------danhmucbaiviet----------------------
    public function danhmucbaiviet($table){
        $sql = "SELECT * FROM $table ORDER BY $table.Iddanhmuc DESC";
        return $this -> db->select($sql);
    }
    public function Insertdanhmuc($tbl_danhmuc,$data){
        return $this ->db ->insert($tbl_danhmuc,$data);
    }
    public function Deletedanhmuc($tbl_danhmuc,$cond){
        return $this ->db -> delete($tbl_danhmuc,$cond);
    }
    public function PostcategoryID($tbl_danhmuc,$cond){
        $sql= "SELECT * FROM $tbl_danhmuc WHERE $cond";
        return $this->db-> select($sql);
    }
    public function Updatedanhmuc($tbl_danhmuc,$data,$cond){
        return $this-> db->update($tbl_danhmuc,$data,$cond);
    }
    //-------------------------baiviet-----------------------------------
    public function Insertbaiviet($table,$data){
        return $this -> db -> insert($table,$data);
    }
    public function danhsachbaiviet($table1,$table2){
        $sql = "SELECT * FROM $table1,$table2 WHERE $table1.Iddanhmuc=$table2.Iddanhmuc";
        return $this -> db->select($sql);
    }
    public function deletepost($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function baivietbyid($table,$cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this -> db -> select($sql);
    }
    public function updatepost($table,$data,$cond){
        return $this ->db -> update($table,$data,$cond);
    }
    public function baivietlienquan($table,$tbl_danhmuc,$id){
        $sql=" SELECT * FROM $table,$tbl_danhmuc WHERE $table.Iddanhmuc = $tbl_danhmuc.Iddanhmuc AND $table.Id =$id";
        return $this ->db -> select($sql);
    }
    //-------------------------------tai lieu-----------------------------------------------------
    public function inserttailieu($table,$data){
        return $this ->db ->insert($table,$data);
    }
    public function listtailieu($table){
        $sql = "SELECT * FROM $table ORDER BY Idtailieu DESC";
        return $this -> db -> select($sql);
    }
    public function deletedoc($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function edittailieu($table,$cond){
        $sql= "SELECT * FROM $table WHERE $cond";
        return $this -> db -> select($sql);
    }
    public function updatetailieu($table,$data,$cond){
        return $this ->db -> update($table,$data,$cond);
    }
    //tim kiem------------------------------------
    public function timkiem($table,$a){
        $sql = "SELECT *  FROM $table WHERE $table.Tenbaiviet LIKE '%$a%'";
        return $this -> db-> select($sql);
    }
    
}
?>