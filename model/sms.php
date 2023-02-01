<?php

include_once 'DBConnection.php';
class sms extends DBconnection {


    private $name;
    private $phone;
    private $dogName;
    private $text;

    public function __construct() {
        parent::__construct();
    }

    public function create() {
            $sql = "INSERT INTO `sms` (name,phone,dogName,text)  VALUES  ('" .$this->name. "', '" .$this->phone. "','" .$this->dogName. "','" .$this->text. "')";

            if (mysqli_query($this->connection, $sql)) {

                return TRUE;
            } else {
                return FALSE;
            }

    }

     public function setmessageDetails($name,$phone,$dogName,$text){

        $this->name = $name;
        $this->phone = $phone;
        $this->dogName = $dogName;
        $this->text = $text;
    }
}
?>