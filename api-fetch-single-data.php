<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$user_id = $_POST['uid'];

include("config.php");

$select = "SELECT * FROM user WHERE `id`= '$user_id'";
$select_exe = mysqli_query($con, $select) or die("SQL Query Failed ! ");

if (mysqli_num_rows($select_exe) > 0) {
    $select_arr = mysqli_fetch_all($select_exe, MYSQLI_ASSOC);
    echo json_encode($select_arr);
} else {
    echo json_encode(array('msg' => 'no data found', 'status' => false));
}

?>