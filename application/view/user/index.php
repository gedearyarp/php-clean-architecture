<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="./application/view/user/container.css">
    
    <style type="text/css">
        body {
            background-color: #FFFFFF;
        }
        .main.container {
            margin-top: 7em;
        }
    </style>
</head>
<body>
    <div class="ui large fixed inverted menu">
        <div class="ui container">
            <a class="teal header item">
                Project Name
            </a>
            <a class="item">Create New Note</a>
            <div class="ui simple dropdown item right aligned">
                Whale Cum, User
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item">Reset Password</a>
                    <a class="item">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ui main text container">
        <h1 class="ui header">Insert New Note</h1>
        <div class="ui divider"></div>
        <div class="ui fluid icon input" style="padding-bottom: 10px">
            <input type="text" placeholder="Insert title....">
        </div>
        <div class="ui form" style="padding-bottom: 10px">
            <div class="field">
                <textarea placeholder="Insert your notes here..."></textarea>
            </div>
        </div>
        <div class="ui button">Post</div>
        <div class="ui divider"></div>
        <h1 class="ui header">Notes 1</h1>
        <div class="ui container">
            <p class="item">Created on: 2018-01-01</p>
            <div class="ui item right aligned">
                <i class="right large pencil alternate link icon"></i>
                <i class="right large red trash alternate link icon"></i>
            </div>
        </div>
        <div class="ui divider"></div>
        <p>
            This is a basic fixed menu template using fixed size containers.
            A text container is used for the main container, which is useful for single column layouts.
            This is a basic fixed menu template using fixed size containers.
            A text container is used for the main container, which is useful for single column layouts.
        </p>
    </div>
</body>
</html>