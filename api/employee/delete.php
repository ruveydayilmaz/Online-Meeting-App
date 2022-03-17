<?php 

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config.php';
  include_once '../../models/Employee.php';

  $database = new Database();
  $db = $database->connect();

  $employee = new Employee($db);

  $data = json_decode(file_get_contents("php://input"));

  $employee->id = $data->id;

  if($employee->delete()) {
    echo json_encode(
      array('message' => 'Employee Deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'Employee Not Deleted')
    );
  }