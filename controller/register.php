<?php 
include_once '../model/RegisterModel.php';


$fname = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
$lname = filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
$addressL1 = filter_var($_POST['addressL1'],FILTER_SANITIZE_STRING);
$addressL2 = filter_var($_POST['addressL2'],FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
$postCode = filter_var($_POST['postCode'],FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
$phoneName = filter_var($_POST['phoneName'],FILTER_SANITIZE_STRING);
$dogName = filter_var($_POST['dogName'],FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone']);
$phoneUnit = filter_var($_POST['phoneUnit'],FILTER_SANITIZE_STRING);
$state = filter_var($_POST['state'],FILTER_SANITIZE_STRING);


$RegisterModel = new RegisterModel();

 $RegisterModel->setRegisterDetails($fname,$lname,$addressL1,$addressL2,$city,$state,$postCode,$email,$phoneName,$dogName,$phone,$phoneUnit);

    if ($RegisterModel->create()) {

            $result = ["status" => 'success'];

            echo json_encode($result);


        } else {

            $result = ["status" => 'fail'];

            echo json_encode($result);

        }
?>

