<?php
require_once __DIR__ . '/../../interface/model/user_model.php';

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

    public function reset_password($old_password, $new_password, $confirm_new_password) {
        include 'utils/constant.php';

        $user_model = new UserModel();
        $username = $_SESSION['username'];
        $user = $user_model->find_user($username);

        if ($new_password != $confirm_new_password) {
            return $PASSWORD_NOT_MATCH;
        }

        if ($old_password == $new_password) {
            return $SAME_PASSWORD;
        }

        if (!password_verify($old_password, $user['password'])) {
            return $WRONG_OLD_PASSWORD;
        }

        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $user_model->update_password($username, $hashed_password);

        return $SUCCESS;
    }
}
?>