<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <nav class="header-nav">
            <ul class="header-ul">
                <li><a href="https://camorobot.netlify.com" class="header-ul-left">Camorobot</a></li>
                <div class="nav-stack">
                    <?php
                        if(isset($_SESSION['userid'])){
                            echo '<li class="header-ul-right"><a href="/pages/logout">logout</a></li>';
                            echo '<li class="header-ul-right"><a href="/_/">account</a></li>';
                        }
                        else{
                            echo '<li class="header-ul-right"><a href="/pages/login">Login</a></li>';
                            echo '<li class="header-ul-right"><a href="/pages/sign-up">Sign up</a></li>';
                        }
                    ?>                 
                </div>
            </ul>
        </nav>
    </section>
</body>
</html>


