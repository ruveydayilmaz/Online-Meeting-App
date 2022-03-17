<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "odev";

$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

if($conn === false) {
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from login where username = '".$username."' AND password = '".$password."'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if($row["type"] == "user") {
        header("Location: user.php");
    }
    else if($row["type"] == "admin") {
        header("Location: admin.php");  
    }
    else if($row["type"] == "employee") {
        header("Location: employee.php");
    }
    else {
        echo "incorrect username or password";
    }
}