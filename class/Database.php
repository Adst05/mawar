<?php

class Database{

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "usk_lsp";

    protected $db;

    public function __construct(){
        $this->db = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
    }
}

?>