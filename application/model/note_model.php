<?php
require_once __DIR__ . '/../infrastructure/mysql/mysql.php';

class NoteModel {
    private $db;

    public function __construct() {
        $this->db = new MySQL("local", "root", "root", "wbd1");
    }

    public function find_all_note() {
        $query = "SELECT * FROM notes";
        $notes = $this->db->query($query);

        return $notes;
    }

    public function find_note_by_id($id) {
        $query = "SELECT * FROM notes WHERE id = $id";
        $note = $this->db->query($query);

        return $note;
    }

    public function find_note_by_username($username) {
        $query = "SELECT * FROM notes WHERE username = '$username'";
        $notes = $this->db->query($query);

        return $notes;
    }

    public function create_note($username, $title, $content, $time_now) {
        $query = "INSERT INTO notes (username, title, content, create_timestamp) VALUES ('$username', '$title', '$content', '$time_now')";
        $this->db->query($query);
    }

    public function update_note_by_id($id, $title, $content, $time_now) {
        $query = "UPDATE notes SET title = '$title', content = '$content', update_timestamp = '$time_now' WHERE note_id = $id";
        $this->db->query($query);
    }

    public function delete_note_by_id($id) {
        $query = "DELETE FROM notes WHERE id = $id";
        $this->db->query($query);
    }
}
?>