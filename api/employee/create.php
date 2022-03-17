<?php 

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config.php';
  include_once '../../models/Employee.php';

  $database = new Database();
  $db = $database->connect();


  $employee = new Employee($db);

  $data = json_decode(file_get_contents("php://input"));

  $employee->name = $data->name;
  $employee->username = $data->username;
  $employee->department = $data->department;

  if($employee->create()) {
    echo json_encode(array('message' => 'Employee Created')
    );
  } else {
    echo json_encode(array('message' => 'Employee Not Created')
    );
  }