<?php
    session_start();
    require '../../assets/php/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/logout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header-footer-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/logout-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics-mq.css">
    <script src="/assets/js/logout-timer.js"></script>
    <title>Logout - Camorobot's repo</title>
</head>

<?php require '../../assets/inc/requirement.inc.php' ?>

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

    <section>
        <div class="logout-wrapper">
            <div class="logout-background">
                <div class="section-title" id="logout-title">
                    <h1>Logging out</h1>
                </div>
                <div class="line" id="logout-line"></div>
                <div class="section-text" id="logout-text">
                    <p>You are now logged out. You will be automaticly 
                    redirected to the home page. </p>
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
                    <p class="footer-text" id="footer-quote">Together we can achieve whatever <br>we want</p>
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
                    <br><a href="/assets/pages/sign-up" class="footer-text">Register</a>
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
    <script src="/assets/js/cookie.js"></script>
</body>
</html>