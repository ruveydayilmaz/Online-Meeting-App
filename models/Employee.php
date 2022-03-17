<?php

class Employee {
    private $conn;
    private $table = 'employee';

    public $id;
    public $name;
    public $username;
    public $department;

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

        $query = 'insert into ' . $this->table . ' set name = :name, username = :username, department = :department';

        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->department = htmlspecialchars(strip_tags($this->department));

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':department', $this->department);

        if($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);
        return false;
    }

    public function update() {
        $query = 'update ' . $this->table . ' set name = :name, username = :username, department = :department where id = :id';

        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->department = htmlspecialchars(strip_tags($this->department));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':department', $this->department);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);
        return false;
    }

    public function delete() {

        $query = 'delete from ' . $this->table . ' where id = :id';

        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);
        return false;
    }
}