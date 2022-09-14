<?php
require_once __DIR__ . '/../infrastructure/mysql/mysql.php';

class NoteModel {
    private $db;

    public function __construct() {
        $this->db = new MySQL("local", "root", "root", "wbd1");
    }

    public function findAllNote() {
        $query = "SELECT * FROM notes";
        $notes = $this->db->query($query);

        return $notes;
    }

    public function findNoteById($id) {
        $query = "SELECT * FROM notes WHERE id = $id";
        $note = $this->db->query($query);

        return $note;
    }

    public function findNoteByUsername($username) {
        $query = "SELECT * FROM notes WHERE username = '$username'";
        $notes = $this->db->query($query);

        return $notes;
    }

    public function createNote($username, $title, $content) {
        $time_now = date('Y-m-d H:i:s');
        $query = "INSERT INTO notes (username, title, content, create_timestamp) VALUES ('$username', '$title', '$content', '$time_now')";
        $this->db->query($query);
    }

    public function updateNoteById($id, $title, $content) {
        $time_now = date('Y-m-d H:i:s');
        $query = "UPDATE notes SET title = '$title', content = '$content', update_timestamp = 'time_now' WHERE note_id = $id";
        $this->db->query($query);
    }

    public function deleteNoteById($id) {
        $query = "DELETE FROM notes WHERE id = $id";
        $this->db->query($query);
    }
}
?>