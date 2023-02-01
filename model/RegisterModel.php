<?php

include_once 'DBConnection.php';

class RegisterModel extends DBconnection {

    private $fname;
    private $lname;
    private $addressL1;
    private $addressL2;
    private $city;
    private $state;
    private $postCode;
    private $email;
    private $phoneName;
    private $dogName;
    private $phone;
    private $phoneUnit;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

       
            $sql = "INSERT INTO `registration` (fname,lname,addressL1,addressL2,city,state,postCode,email,phoneName,dogName,phone,phoneUnit)  VALUES  ('" .$this->fname. "', '" .$this->lname. "','" .$this->addressL1. "','" .$this->addressL2. "', '" .$this->city. "','".$this->state."', '" . $this->postCode . "', '" .$this->email. "','".$this->phoneName."','".$this->dogName."','".$this->phone."','".$this->phoneUnit."')";

            if (mysqli_query($this->connection, $sql)) {

                return TRUE;
            } else {
                return FALSE;
            }
        
    }

    public function setRegisterDetails($fname,$lname,$addressL1,$addressL2,$city,$postCode,$email,$phoneName,$dogName,$phone,$phoneUnit){

        $this->fname = $fname;
        $this->lname = $lname;
        $this->addressL1 = $addressL1;
        $this->addressL2 = $addressL2;
        $this->city = $city;
        $this->postCode = $postCode;
        $this->email = $email;
        $this->phoneName = $phoneName;
        $this->dogName = $dogName;
        $this->phone = $phone;
        $this->phoneUnit = $phoneUnit;
    }


}

?>