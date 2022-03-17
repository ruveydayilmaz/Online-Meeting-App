<?php

header('Access-Controll-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config.php';
include_once '../../models/User.php';

$database = new Database();
$db = $database->connect();

$register = new Login($db);

$result = $register->read();

$num = $result->rowCount();

if($num > 0) {
  $arr = array();

  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

    $post_item = array(
      'id' => $id,
      'username' => $username,
      'password' => $password,
      'type' => $type
    );

    array_push($arr, $post_item);
  }

  echo json_encode($arr);

} else {
  echo json_encode(
    array('message' => 'No User Found')
  );
}