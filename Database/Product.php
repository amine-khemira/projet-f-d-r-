<?php

class Product
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db=$db;
    }

    public function getData($table='produit'){
        $result=$this->db->con->query("SELECT * FROM {$table}");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getFab(){
        $result=$this->db->con->query("SELECT * FROM produit INNER JOIN fabriquant ON produit.id_fab = fabriquant.id_fab;");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }

}