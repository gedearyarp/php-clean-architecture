<?php
require_once __DIR__ . '/../../interface/model/user_model.php';
require_once __DIR__ . '/../../service/user/index.php';

class Reset_password extends Controller {
    public function index() {
        $this->view('reset_password/index');
    }

    public function reset_user_password() {
        $userService = new UserService();
        $status = $userService->reset_password($_POST['old_password'], $_POST['new_password'], $_POST['confirm_new_password']);
        if ($status == 'SUCCESS') {
            header('Location: ' . BASE_URL . '/');
        } else {
            header('Location: ' . BASE_URL . '/reset_password?err=' . $status);
        }
    }
}
?>