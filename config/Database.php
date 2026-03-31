<?php

class Database{

protected $conn;
    
public function __construct(){

    $this->conn=new mysqli('localhost','root',"",'menaxhimi_detyrave');

        if($this->conn->connect_errno>0){
            die('Lidhja me databaze deshtoi'.$this->conn->connect_errno);
        }

    }



}