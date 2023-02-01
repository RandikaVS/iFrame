<?php
include_once '../model/sms.php';
$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
$dogName = filter_var($_POST['dogName'],FILTER_SANITIZE_STRING);
$text = filter_var($_POST['text'],FILTER_SANITIZE_STRING);

$sms = new sms();

$sms->setmessageDetails($name,$phone,$dogName,$text);

    if ($sms->create()) {

            $result = ["status" => 'success'];

            echo json_encode($result);


        } else {

            $result = ["status" => 'fail'];

            echo json_encode($result);

        }
?>