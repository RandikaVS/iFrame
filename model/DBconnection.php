<?php

class DBconnection {

//    // main conection
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $databaseName = "iframe";
// host conection
//    private $serverName = "localhost:3306";
//    private $userName = "setharan_WPQBB";
//    private $password = "Rudy@1998";
//    private $databaseName = "setharan_ayurvedha";
    
    protected $connection;

    protected function __construct() {

        $this->connection = new mysqli($this->serverName, $this->userName, $this->password, $this->databaseName);


        if (!$this->connection) {
            echo 'Cannot connect to database server';
        
        } else {
           
            return $this->connection;
        }
    }

}

?>