<?php
require_once __DIR__ . '/../../model/user_model.php';

class UserService {
    public function get_user_data() {
        $user_model = new UserModel();
        $username = $_SESSION['username'];

        $user_data = $user_model->find_user($username);

        return $user_data;
    }

    public function get_list_user() {
        include 'utils/constant.php';

        $user_model = new UserModel();

        if (!(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')) {
            return $UNAUTHORIZED;
        }

        $list_user = $user_model->find_all_user();

        return $list_user;

    }

    public function reset_password($password) {
        include 'utils/constant.php';

        $user_model = new UserModel();
        $username = $_SESSION['username'];

        if (!(isset($_SESSION['role']) && $_SESSION['role'] == 'user')) {
            return $UNAUTHORIZED;
        }

        $user_data = $user_model->find_user($username);
        if ($user_data == null) {
            return $NOT_FOUND;
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user_model->update_password($username, $hashed_password);

        return $SUCCESS;
    }
}
?>