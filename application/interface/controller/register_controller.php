<?php
require_once __DIR__ . '/../../service/authentication/index.php';

class Register extends Controller {
    public function index() {
        echo 'here 1';
        $authService = new AuthenticationService();
        echo 'here 2';
        $status = $authService->register('admin', 'gede dipa', 'admin', 'admin', 'admin');
        echo 'here 3';
        $this->view('register/index');
    }

    public function register_user() {
        $authService = new AuthenticationService();
        $status = $authService->register($_POST['username'], $_POST['name'], $_POST['password'], $_POST['confirm_password'], $_POST['role']);

        $data = [];
        if ($status == 'SUCCESS') {
            header('Location: ' . BASE_URL . '/login');
            // TODO: add flasher
        } else {
            $data['status'] = $status;
            $this->view('register/index', $data);
        }
        $data;
    }
}

?>