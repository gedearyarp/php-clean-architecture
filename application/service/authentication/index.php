<?php
require_once __DIR__ . '/../../interface/model/user_model.php';

class AuthenticationService {
    public function register($username, $name, $password, $confirm_password, $role) {
        include 'utils/constant.php';

        $user_model = new UserModel();

        if (preg_match('/\s/', $username)) {
            return $USERNAME_CONTAINS_WHITESPACE;
        }

        $user = $user_model->find_user($username);
        if ($user != null) {
            return $USERNAME_ALREADY_TAKEN;
        }

        if ($password != $confirm_password) {
            return $PASSWORD_DOESNT_MATCH;
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user_model->create_user($username, $name, $hashed_password, $role);
        
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
        $_SESSION['name'] = $user['name'];
        $_SESSION['role'] = $user['role'];

        return $SUCCESS;
    }

    public function logout() {
        include 'utils/constant.php';

        session_destroy();

        return $SUCCESS;
    }
}
?>