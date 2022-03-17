<?php

class Database {
    private  $dbHost     = "localhost";
    private  $dbUsername = "root";
    private  $dbPassword = "";
    private  $dbName     = "odev";

function connect() {
    $this->conn = null;

    try { 
      $this->conn = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName, $this->dbUsername, $this->dbPassword);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'Connection Error: ' . $e->getMessage();
    }

    return $this->conn;
}}