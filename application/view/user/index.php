<?php
    require_once __DIR__ . '/../../service/authentication/index.php';
    require_once __DIR__ . '/component/note_component.php';
    $authService = new AuthenticationService();
    if(isset($_GET['logout'])) {
        $authService->logout();
        header('Location: ' . BASE_URL . '/');
    }
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
            margin-top: 7em;
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
            <a class="teal header item">
                A Very Simple Note App
            </a>
            <a class="item">Create New Note</a>
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
        <form method="POST" action="/user/add_note">
            <h1 class="ui header">Insert New Note</h1>
            <div class="ui divider"></div>
            <div class="ui fluid icon input" style="padding-bottom: 10px">
                <input type="text" placeholder="Insert title...." name="title">
            </div>
            <div class="ui form" style="padding-bottom: 10px">
                <div class="field">
                    <textarea placeholder="Insert your notes here..." name="content"></textarea>
                </div>
            </div>
            <button class="ui button" type="submit">Post</button>
        </form>
        <?php
            if (isset($data['notes'])) {
                foreach ($data['notes'] as $note) {
                    notes($note['note_id'], $note['title'], $note['create_timestamp'], $note['content']);
                }
            }
        ?>
    </div>
</body>
</html>