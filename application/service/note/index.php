<?php
require_once __DIR__ . '/../../interface/model/note_model.php';

class NoteService {
    public function create_note($title, $content) {
        include 'utils/constant.php';

        $noteModel = new NoteModel();

        date_default_timezone_set('Asia/Jakarta');
        $time_now = date('d-m-y h:i:s');
        $username = $_SESSION['username'];

        $noteModel->create_note($username, $title, $content, $time_now);

        return $SUCCESS;
    }

    public function get_all_notes() {
        $note_model = new NoteModel();

        $username = $_SESSION['username'];
        $notes = $note_model->find_note_by_username($username);

        return $notes;
    }

    public function update_note($id, $title, $content) {
        include 'utils/constant.php';

        $note_model = new NoteModel();

        if ($title == null || $title == '') {
            return $EMPTY_TITLE;
        }

        if ($content == null || $content == '') {
            return $EMPTY_CONTENT;
        }

        $current_note = $note_model->find_note_by_id($id);
        if ($current_note['title'] == $title && $current_note['content'] == $content) {
            return $SAME_NOTE;
        }

        date_default_timezone_set('Asia/Jakarta');
        $time_now = date('d-m-y h:i:s');
        $note_model->update_note_by_id($id, $title, $content, $time_now);

        return $SUCCESS;
    }

    public function delete_note($id) {
        include 'utils/constant.php';

        $note_model = new NoteModel();
        $note_model->delete_note_by_id($id);

        return $SUCCESS;
    }
}
?>