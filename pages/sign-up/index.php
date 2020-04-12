<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/sign-up.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header-footer-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/sign-up-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics-mq.css">
    <title>Sign up - Camorobot's Repo</title>
</head>
<body>
    
<!--HEADER-->

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

    <!--LOGIN FORM-->

    <section class="login-form">
        <div class="login-wrapper">
            <div class="wrapper-box">
                <div class="l-title">
                    <h1>Sign up</h1>
                </div>
                <div class="form">
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "emptyfields"){
                                echo '<strong><p class="php-error">Pleas full in all fields!</p></strong>';
                            }
                            else if($_GET['error'] == "invaliduid"){
                                echo '<strong><p class="php-error php-user-password">Invailid username. Try again!</p></strong>';
                            }
                            else if($_GET['error'] == "invalidmail"){
                                echo '<strong><p class="php-error php-user-password">Invailid email. Try again!</p></strong>';
                            }
                            else if($_GET['error'] == "passwordcheck"){
                                echo "<strong><p class='php-error php-user-password' id='php-password-error'>Passwords don't match. Try again!</p></strong>";
                            }
                        }
                    ?>
                    <form action="/assets/php/signup.php" method="POST">
                        <div class="form-email">
                            <div class="form-text">
                                <p>E-mail</p>
                            </div>
                            <div class="form-input">
                                <input type="email" name="email"></input>
                            </div>
                        </div>
                        <div class="form-username">
                            <div class="form-text">
                                <p>Username</p>
                            </div>
                            <div class="form-input">
                                <input type="text" name="uid"></input>
                            </div>
                        </div>
                        <div class="form-grid">
                            <div class="form-password">
                                <div class="form-text">
                                    <p>Password</p>
                                </div>
                                <div class="form-input">
                                    <input class="password-input" type="password" name="password"></input>
                                </div>
                            </div>
                            <div class="form-password">
                                <div class="form-text">
                                    <p>Confim Password</p>
                                </div>
                                <div class="form-input">
                                    <input class="password-input" type="password" name="confim-password"></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-button">
                            <button class="button" type="submit" name="signup-submit">Sign up</button>
                        </div>
                    </form>
                </div>
                <div class="line"></div>
                <div class="box-register">
                    <p>Already have a account? <a href="/pages/login">Login</a> here</p>
                </div>
            </div>
        </div>

    </section>

<!--FOOTER MENU-->

    <section class="footer">
            <div class="footer-grid">
                <div class="footer-margin footer-collum-1">
                    <div class="footer-title">
                        <h2>Camorobot</h2>
                    </div>
                    <div class="footer-text-box">
                        <p class="footer-text">Together we can achieve whatever <br>we want</p>
                    </div>
                </div>
                <div class="footer-margin footer-collum-2">
                    <div class="footer-title">
                        <h2>Explore</h2>
                    </div>
                    <div class="footer-text-box">
                        <a href="/pages/login" class="footer-text">Account</a>
                        <br><a href="https://camorobot.netlify.com" class="footer-text">Repository</a>
                    </div>
                </div>
                <div class="footer-margin footer-collum-3">
                    <div class="footer-title">
                        <h2>Sitemap</h2>
                    </div>
                    <div class="footer-text-box">
                        <a href="/pages/login" class="footer-text">Login</a>
                        <br><a href="/pages/register" class="footer-text">Register</a>
                        <br><a href="cydia://url/https://cydia.saurik.com/api/share#?source=https://camorobot.netlify.com" class="footer-text">Add to cydia</a>
                        <br><a href="#featured-box" class="footer-text">Tweaks</a>
                    </div>
                </div>
                <div class="footer-margin footer-collum-3">
                    <div class="footer-title">
                        <h2>Policies</h2>
                    </div>
                    <div class="footer-text-box">
                        <a href="/pages/policies/privacy" class="footer-text">Privacy</a>
                        <br><a href="/pages/policies/terms-of-services" class="footer-text">Terms of Service</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-line"></div>
            <div class="footer-text-box footer-rights">
                <p>Copyright 2019 - 2020</p>
            </div>
        </section>
</body>
</html>