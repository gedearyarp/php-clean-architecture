<?php
require_once __DIR__ . '/../infrastructure/mysql/mysql.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new MySQL("local", "root", "root", "wbd1");
    }

    public function findAllUser() {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);

        return $result;
    }

    public function findUser($username) {
        $query = "SELECT * FROM users WHERE username = $username";
        $result = $this->db->query($query);

        return $result;
    }

    public function createUser($username, $name, $password, $role) {
        $query = "INSERT INTO users (username, name, password, role) VALUES ('$username', '$name', '$password', '$role')";
        $this->db->query($query);
    }

    public function updateUser($username, $name, $password, $role) {
        $query = "UPDATE users SET name = '$name', password = '$password', role = '$role' WHERE username = '$username'";
        $this->db->query($query);
    }
}
?>