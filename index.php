<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wbd1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
            
            require __DIR__ . '/application/view/login/index.php';
            break;
        case '/register':
            require __DIR__ . '/application/view/register/index.php';
            break;
        case '/home':
            require __DIR__ . '/application/view/user/index.php';
        default:
            // http_response_code(404);
            // require __DIR__ . '/views/404.php';
            break;
    } ?>
</body>
</html>