<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods');

$id=23;
$name="customer";
$email="customer@gmail.com";
$password=md5(12345678);

include("config.php");

$update = "UPDATE user SET`name`='$name',`email`='$email',`password`='$password',`role`='0' WHERE `id`='$id'";

if (mysqli_query($con, $update)) {   
    echo json_encode(array('msg' => 'DATA UPDATE SUCCESSFULLY ! ', 'status' => true)); 
} else {
    echo json_encode(array('msg' => 'SOMETHING WENT WRONG ! ', 'status' => false));
}

?>