<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <title>Login</title>
    <style type="text/css">
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
        .ui.grid {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
            -ms-flex-direction: row;
                flex-direction: row;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        -webkit-box-align: stretch;
            -ms-flex-align: stretch;
                align-items: stretch;
        padding: 0em;
}
    </style>
</head>
<body>
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h3 class="ui teal header">
                <div class="content">
                    Register
                </div>
            </h3>
            <form class="ui large form" method="POST" action="register/register_user">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="name" placeholder="Full Name" value="">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </div>
                </div>
                <button class="ui fluid large teal submit button" type="submit">Register</button>
            </div>
            <div class="ui error message"></div>
            </form>
            <div class="ui message">
                <a href="/">Already have an account?</a>
            </div>
        </div>
    </div>
</body>
</html>