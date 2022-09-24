<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="./application/view/user/style/container.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    
    <style type="text/css">
        body {
            background-color: #FFFFFF;
        }
        .main.container {
            margin-top: 4em;
        }

        .transparent {
            background-color: transparent;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            overflow: hidden;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="ui large fixed inverted menu">
        <div class="ui container">
            <a class="teal header item" href="/">
                A Very Simple Note App
            </a>
            <div class="ui simple dropdown item right aligned">
                Welcome, <?=$_SESSION['name']?>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item">Reset Password</a>
                    <a class="item" href="/?logout=true" >Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ui main text container">
        <form class="ui form" method="POST" action="/reset_password/reset_user_password">
            <h1 class="ui header">Reset Password</h1>
            <div class="field 
            <?php 
                if (isset($_GET['err']) && ($_GET['err'] == "WRONG_OLD_PASSWORD" || $_GET['err'] == "SAME_PASSWORD")) {
                    echo('error');
                }
            ?>">
                <label>Enter old password:</label>
                <input type="password" name="old_password" placeholder="Enter old password">
                <?php 
                if (isset($_GET['err']) && $_GET['err'] == "WRONG_OLD_PASSWORD") {
                    echo('<label style="color: error">Old password does not match!</label>');
                }
                ?>
            </div>
            <div class="field
            <?php 
                if (isset($_GET['err']) && ($_GET['err'] == "PASSWORD_NOT_MATCH" || $_GET['err'] == "SAME_PASSWORD")) {
                    echo('error');
                }
            ?>">
                <label>Enter new password:</label>
                <input type="password" name="new_password" placeholder="Enter new password">
            </div>
            <div class="field
            <?php 
                if (isset($_GET['err']) && ($_GET['err'] == "PASSWORD_NOT_MATCH" || $_GET['err'] == "SAME_PASSWORD")) {
                    echo('error');
                }
            ?>">
                <label>Confirm new password:</label>
                <input type="password" name="confirm_new_password" placeholder="Confirm new password">
                <?php 
                if (isset($_GET['err']) && $_GET['err'] == "PASSWORD_NOT_MATCH") {
                    echo('<label style="color: error">New password and confirm password does not match!</label>');
                }
                else if (isset($_GET['err']) && $_GET['err'] == "SAME_PASSWORD") {
                    echo('<label style="color: error">New password and old password cannot be the same!</label>');
                }
                ?>
            </div>
            <button class="ui button" type="submit">Reset Password</button>
        </form>
    </div>
</body>
</html>