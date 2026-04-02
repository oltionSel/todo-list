<?php

class Database {

    protected $servername="localhost";
    protected $username="root";
    protected $password="";
    protected $dbname="menaxhimi_detyrave";
    protected $conn;

    public function __construct() {

        $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        if($this->conn->connect_error>0) {
            die('Lidhja me databaze deshtoi: '.$this->conn->connect_error);
        }

    }

}

?>