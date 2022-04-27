<?php

class cart
{
    public $db = null;
    public function __construct(DBController  $db)
    {
        if(!isset($db->con))return null;
        $this->db = $db;
    }
    public function insertintocart($params = null,$table="panier"){
        if ($this->db->con!=null){
            if($params!=null){
                $columns=implode(','.array_keys($params)):
                $values
            }
        }
    }

}