<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods');

$name="user";
$email="user@gmail.com";
$password=md5(12345678);

include("config.php");

$insert = "INSERT INTO user(`name`,`email`,`password`,`role`) VALUES ('$name','$email','$password','0')";

if (mysqli_query($con, $insert)) {   
    echo json_encode(array('msg' => 'DATA INSERT SUCCESSFULLY ! ', 'status' => true)); 
} else {
    echo json_encode(array('msg' => 'SOMETHING WENT WRONG ! ', 'status' => false));
}

?>