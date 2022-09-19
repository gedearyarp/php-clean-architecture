<?php
require_once __DIR__ . '/../../../service/authentication/index.php';

class Login extends Controller {
    public function index() {
        $this->view('login/index');
    }

    public function login_user() {
        $authService = new AuthenticationService();
        $status = $authService->login($_POST['username'], $_POST['password']);

        if ($status == 'SUCCESS') {
            if ($_SESSION['role'] == 'admin') {
                header('Location: ' . BASE_URL . '/admin');
            } else {
                header('Location: ' . BASE_URL . '/user');
            }
        } else {
            $data['status'] = $status;
            $this->view('login/index', $data);
        }
    }
}
?>