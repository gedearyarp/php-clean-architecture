<?php
require_once __DIR__ . '/../../infrastructure/mysql/mysql.php';

class NoteModel {
    private $db;

    public function __construct() {
        $this->db = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function find_all_note() {
        $query = "SELECT * FROM notes";

        $this->db->query($query);

        $result = $this->db->result_set();
        return $result;
    }

    public function find_note_by_id($id) {
        $query = "SELECT * FROM notes WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(':id', $id);

        $result = $this->db->single();
        return $result;
    }

    public function find_note_by_username($username) {
        $query = "SELECT * FROM notes WHERE username = :username";

        $this->db->query($query);
        $this->db->bind(':username', $username);

        $result = $this->db->result_set();
        return $result;
    }

    public function create_note($username, $title, $content, $time_now) {
        $query = "INSERT INTO notes (username, title, content, create_timestamp) VALUES (:username, :title, :content, :time_now)";

        $this->db->query($query);
        $this->db->bind(':username', $username);
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':time_now', $time_now);

        $this->db->execute();
    }

    public function update_note_by_id($id, $title, $content, $time_now) {
        $query = "UPDATE notes SET title = :title, content = :content, update_timestamp = :time_now WHERE note_id = :id";

        $this->db->query($query);
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':time_now', $time_now);
        $this->db->bind(':id', $id);

        $this->db->execute();
    }

    public function delete_note_by_id($id) {
        $query = "DELETE FROM notes WHERE note_id = :id";
        
        $this->db->query($query);
        $this->db->bind(':id', $id);

        $this->db->execute();
    }
}
?>