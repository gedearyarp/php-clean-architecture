<?php
require_once __DIR__ . '/../../service/authentication/index.php';

class Register extends Controller {
    public function index() {
        $this->view('register/index');
    }

    public function register_user() {
        $authService = new AuthenticationService();
        $status = $authService->register($_POST['username'], $_POST['name'], $_POST['password'], $_POST['confirm_password'], 'user');

        $data = [];
        if ($status == 'SUCCESS') {
            header('Location: ' . BASE_URL . '/');
            // TODO: add flasher
        } else {
            $data['status'] = $status;
            header('Location: ' . BASE_URL . '/register?err=' . $status);
        }
        $data;
    }
}

?>