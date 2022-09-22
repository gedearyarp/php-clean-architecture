<?php
require_once __DIR__ . '/../../service/note/index.php';

class User extends Controller {
    public function index() {
        $this->view('user/index');
    }

    public function add_note() {
        $noteService = new NoteService();

    }
}

?>