<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sticky Example - Semantic</title>
    <style type="text/css">
        body {
            background-color: #FFFFFF;
        }
        .main.container {
            margin-top: 2em;
        }
        .main.menu {
            margin-top: 4em;
            border-radius: 0;
            border: none;
            box-shadow: none;
            transition:
            box-shadow 0.5s ease,
            padding 0.5s ease
            ;
        }
        .main.menu .item img.logo {
            margin-right: 1.5em;
        }

        .overlay {
            float: left;
            margin: 0em 3em 1em 0em;
        }
        .overlay .menu {
            position: relative;
            left: 0;
            transition: left 0.5s ease;
        }

        .main.menu.fixed {
            background-color: #FFFFFF;
            border: 1px solid #DDD;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }
        .overlay.fixed .menu {
            left: 800px;
        }

        .text.container .left.floated.image {
            margin: 2em 2em 2em -4em;
        }
        .text.container .right.floated.image {
            margin: 2em -4em 2em 2em;
        }

        .ui.footer.segment {
            margin: 5em 0em 0em;
            padding: 5em 0em;
        }
    </style>
</head>

<body>
    <div class="ui main text container">
        <h1 class="ui header">Sticky Example</h1>
        <p>This example shows how to use lazy loaded images, a sticky menu, and a simple text container</p>
    </div>
    <div class="ui borderless main menu">
        <div class="ui text container">
        <div class="header item">
            <img class="logo" src="./Sticky Example - Semantic_files/logo.png">
            Project Name
        </div>
        <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Blog</a>
        <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Articles</a>
        <a href="https://semantic-ui.com/examples/sticky.html#" class="ui right floated dropdown item" tabindex="0">
            Dropdown <i class="dropdown icon"></i>
            <div class="menu" tabindex="-1">
            <div class="item">Link Item</div>
            <div class="item">Link Item</div>
            <div class="divider"></div>
            <div class="header">Header Item</div>
            <div class="item">
                <i class="dropdown icon"></i>
                Sub Menu
                <div class="menu">
                <div class="item">Link Item</div>
                <div class="item">Link Item</div>
                </div>
            </div>
            <div class="item">Link Item</div>
            </div>
        </a>
        </div>
    </div><div class="ui borderless main menu placeholder" style="display: none;">
        <div class="ui text container">
        <div class="header item">
            <img class="logo" src="./Sticky Example - Semantic_files/logo.png">
            Project Name
        </div>
        <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Blog</a>
        <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Articles</a>
        <a href="https://semantic-ui.com/examples/sticky.html#" class="ui right floated dropdown item" tabindex="0">
            Dropdown <i class="dropdown icon"></i>
            <div class="menu" tabindex="-1">
            <div class="item">Link Item</div>
            <div class="item">Link Item</div>
            <div class="divider"></div>
            <div class="header">Header Item</div>
            <div class="item">
                <i class="dropdown icon"></i>
                Sub Menu
                <div class="menu">
                <div class="item">Link Item</div>
                <div class="item">Link Item</div>
                </div>
            </div>
            <div class="item">Link Item</div>
            </div>
        </a>
        </div>
    </div>

    <div class="ui text container">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <div class="overlay">
        <div class="ui labeled icon vertical menu">
            <a class="item"><i class="twitter icon"></i> Tweet</a>
            <a class="item"><i class="facebook icon"></i> Share</a>
            <a class="item"><i class="mail icon"></i> E-mail</a>
        </div>
        </div><div class="overlay placeholder" style="display: none;">
        <div class="ui labeled icon vertical menu">
            <a class="item"><i class="twitter icon"></i> Tweet</a>
            <a class="item"><i class="facebook icon"></i> Share</a>
            <a class="item"><i class="mail icon"></i> E-mail</a>
        </div>
        </div>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <img class="ui medium left floated image" data-src="assets/images/wireframe/square-image.png">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
        <img class="ui medium right floated image" data-src="assets/images/wireframe/square-image.png">
        Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <img class="ui medium left floated image" data-src="assets/images/wireframe/square-image.png">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
        <img class="ui medium right floated image" data-src="assets/images/wireframe/square-image.png">
        Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    </div>

    <div class="ui inverted vertical footer segment">
        <div class="ui center aligned container">
        <div class="ui stackable inverted divided grid">
            <div class="three wide column">
            <h4 class="ui inverted header">Group 1</h4>
            <div class="ui inverted link list">
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link One</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Two</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Three</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Four</a>
            </div>
            </div>
            <div class="three wide column">
            <h4 class="ui inverted header">Group 2</h4>
            <div class="ui inverted link list">
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link One</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Two</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Three</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Four</a>
            </div>
            </div>
            <div class="three wide column">
            <h4 class="ui inverted header">Group 3</h4>
            <div class="ui inverted link list">
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link One</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Two</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Three</a>
                <a href="https://semantic-ui.com/examples/sticky.html#" class="item">Link Four</a>
            </div>
            </div>
            <div class="seven wide column">
            <h4 class="ui inverted header">Footer Header</h4>
            <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
            </div>
        </div>
        <div class="ui inverted section divider"></div>
        <img src="./Sticky Example - Semantic_files/logo.png" class="ui centered mini image">
        <div class="ui horizontal inverted small divided link list">
            <a class="item" href="https://semantic-ui.com/examples/sticky.html#">Site Map</a>
            <a class="item" href="https://semantic-ui.com/examples/sticky.html#">Contact Us</a>
            <a class="item" href="https://semantic-ui.com/examples/sticky.html#">Terms and Conditions</a>
            <a class="item" href="https://semantic-ui.com/examples/sticky.html#">Privacy Policy</a>
        </div>
        </div>
    </div>
</body>
</html>