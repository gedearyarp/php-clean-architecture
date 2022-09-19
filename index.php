<?php
if (!session_id()) session_start();
require_once 'application/init.php';

$app = new App();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
</head>
<body>
    <?php
    $request = $_SERVER['REQUEST_URI'];
    switch ($request) {
        case '':
        case '/':
            if (!isset($_SESSION['username'])) {
                require __DIR__ . '/application/view/login/index.php';
                break;
            }
        case '/register':
            if (!isset($_SESSION['username'])) {
                require __DIR__ . '/application/view/register/index.php';
            break;
            }
            else if ($_SESSION['role'] == 'admin') {
                require __DIR__ . '/application/view/admin/index.php';
            }
            else if ($_SESSION['role'] == 'user') {
                require __DIR__ . '/application/view/user/index.php';
            }
            break;
        case '/home':
            require __DIR__ . '/application/view/user/index.php';
            break;
        default:
            if (!isset($_SESSION['username'])) {
                require __DIR__ . '/application/view/login/index.php';
            break;
            }
            else if ($_SESSION['role'] == 'admin') {
                require __DIR__ . '/application/view/admin/index.php';
            }
            else if ($_SESSION['role'] == 'user') {
                require __DIR__ . '/application/view/user/index.php';
            }
    } ?>
</body>
</html>