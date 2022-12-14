<?php
require_once __DIR__ . '/../../infrastructure/mysql/mysql.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function find_all_user() {
        $query = "SELECT * FROM users";

        $this->db->query($query);
        $result = $this->db->result_set();

        return $result;
    }

    public function find_user($username) {
        $query = "SELECT * FROM users WHERE username = :username";

        $this->db->query($query);
        $this->db->bind(':username', $username);
        $result = $this->db->single();

        return $result;
    }

    public function create_user($username, $name, $password, $role) {
        $query = "INSERT INTO users (username, name, password, role) VALUES (:username, :name, :password, :role)";

        $this->db->query($query);
        $this->db->bind(':username', $username);
        $this->db->bind(':name', $name);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $role);

        $this->db->execute();
    }

    public function update_user($username, $name, $password, $role) {
        $query = "UPDATE users SET name = :name, password = :password, role = :role WHERE username = :username";

        $this->db->query($query);
        $this->db->bind(':name', $name);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $role);
        $this->db->bind(':username', $username);

        $this->db->execute();
    }

    public function update_password($username, $password) {
        $query = "UPDATE users SET password = :password WHERE username = :username";

        $this->db->query($query);
        $this->db->bind(':password', $password);
        $this->db->bind(':username', $username);

        $this->db->execute();
    }
}
?>