<?php
require_once __DIR__ . '/../../interface/model/user_model.php';

class AuthenticationService {
    public function register($username, $name, $password, $confirm_password, $role) {
        include 'utils/constant.php';
        echo 'here 4';

        $user_model = new UserModel();
        echo 'here 5';

        if (preg_match('/\s/', $username)) {
            return $USERNAME_CONTAINS_WHITESPACE;
        }
        echo 'here 6';

        $user = $user_model->find_user($username);
        echo 'here 7';
        if ($user != null) {
            return $USERNAME_ALREADY_TAKEN;
        }
        echo 'here 8';

        if ($password != $confirm_password) {
            return $PASSWORD_DOESNT_MATCH;
        }
        echo 'here 9';

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo 'here 10';

        $userModel->create_user($username, $name, $hashed_password, $role);
        echo 'here 11';
        
        return $SUCCESS;
    }

    public function login($username, $password) {
        include 'utils/constant.php';

        $user_model = new UserModel();

        $user = $user_model->find_user($username);
        if ($user == null) {
            return $USER_NOT_FOUND;
        }

        if (!password_verify($password, $user['password'])) {
            return $WRONG_PASSWORD;
        }

        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];

        return $user;
    }

    public function logout() {
        include 'utils/constant.php';

        session_destroy();

        return $SUCCESS;
    }
}
?>