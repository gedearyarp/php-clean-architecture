<?php
require_once __DIR__ . '/../../service/note/index.php';

class User extends Controller {
    public function index() {
        $noteService = new NoteService();
        $data['notes'] = $noteService->get_all_notes();
        $this->view('user/index', $data);
    }

    public function add_note() {
        $noteService = new NoteService();
        $status = $noteService->create_note($_POST['title'], $_POST['content']);
        if ($status == 'SUCCESS') {
            header('Location: ' . BASE_URL . '/');
        } else {
            $data['status'] = $status;
            $this->view('user/index', $data);
        }
    }

    public function edit_note() {
        $noteService = new NoteService();
        $status = $noteService->update_note($_POST['id'], $_POST['title'], $_POST['content']);
        if ($status == 'SUCCESS') {
            header('Location: ' . BASE_URL . '/');
        } else {
            $data['status'] = $status;
            $this->view('user/index', $data);
        }
    }

    public function delete_note() {
        $noteService = new NoteService();
        $status = $noteService->delete_note($_POST['note_id']);
        if ($status == 'SUCCESS') {
            header('Location: ' . BASE_URL . '/');
        } else {
            $data['status'] = $status;
            $this->view('user/index', $data);
        }
    }
}

?>