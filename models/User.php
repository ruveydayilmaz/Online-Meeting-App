<?php

class User {
    private $conn;
    private $table = 'login';

    public $id;
    public $username;
    public $password;
    public $type;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {

        $query = 'select * from  ' . $this->table . '';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function create() {

        $query = 'insert into ' . $this->table . ' set username = :username, password = :password, type = :type';

        $stmt = $this->conn->prepare($query);

        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->type = htmlspecialchars(strip_tags($this->type));

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':type', $this->type);

        if($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);
        return false;
    }
}