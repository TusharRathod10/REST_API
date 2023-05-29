<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods');

$user_id = 23;

include("config.php");

$delete = "DELETE FROM user WHERE `id`= '$user_id'";


if (mysqli_query($con, $delete)) {
    echo json_encode(array('msg' => 'DATA DELETE SUCCESSFULLY ! ', 'status' => true));
} else {
    echo json_encode(array('msg' => 'SOMETHING WENT WRONG ! ', 'status' => false));
}

?>