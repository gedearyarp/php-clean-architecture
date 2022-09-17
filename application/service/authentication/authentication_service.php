<?php
require_once __DIR__ . '/../../model/user_model.php';

class AuthenticationService {
    public function register($username, $name, $password, $confirmPassword, $role) {
        include 'utils/constant.php';

        if (preg_match('/\s/', $username)) {
            return $USERNAME_CONTAINS_WHITESPACE;
        }

        $userModel = new UserModel();
        $user = $userModel->findUser($username);
        if ($user != null) {
            return $USERNAME_ALREADY_TAKEN;
        }

        if ($password != $confirmPassword) {
            return $PASSWORD_DOESNT_MATCH;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $userModel->createUser($username, $name, $hashedPassword, $role);

        return $SUCCESS;
    }

    public function login($username, $password) {
        include 'utils/constant.php';

        $userModel = new UserModel();
        $user = $userModel->findUser($username);
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