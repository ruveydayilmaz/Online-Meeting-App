<?php

header('Access-Controll-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config.php';
include_once '../../models/Employee.php';

$database = new Database();
$db = $database->connect();

$employee = new Employee($db);

$result = $employee->read();

$num = $result->rowCount();

if($num > 0) {
  $arr = array();

  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

    $post_item = array(
      'id' => $id,
      'name' => $name,
      'username' => $username,
      'department' => $department,
    );

    array_push($arr, $post_item);
  }

  echo json_encode($arr);

} else {
  echo json_encode(
    array('message' => 'No Posts Found')
  );
}