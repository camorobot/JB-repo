<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header-footer-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/index-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics-mq.css">
    <title>Camorobot's Repo</title>
    <script src="/assets/js/scroll.js"></script>
</head>

<?php require 'assets/inc/requirement.inc.php' ?>

<body class="scroll scroll-firefox">

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

    <!--ADD TO CYDIA-->

    <section class="add-to-cydia">
        <div class="cydia-wrapper">
            <div class="cydia-wrapper-text">
                <h1 class="cydia-wrapper-text-title">Camorobot's Repo</h1>
                <h1><a href="cydia://url/https://cydia.saurik.com/api/share#?source=https://camorobot.netlify.com" class="cydia-button">Add repo to cydia</a></h1>
            </div>
        </div>
    </section>

    <!--FEATURED SECTION-->

    <section class="featured">
        <div class="section-title">
            <h1>Featured tweaks</h1>
        </div>
        <div class="featured-box">
            <div class="featured-wrapper">
                <div class="featured-card" id="background-card-1">
                    <div class="featured-card background-card-fade" id="background-card-1-fade">
                        <a href="./package/nl.camorobot.darkout/">
                            <div class="card-icon">
                                <img src="assets/icons/app-icon.png" alt="ICON">
                            </div>
                            <div class="card-name">
                                <p class="card-p">Darkout</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="featured-card" id="background-card-2">
                    <div class="featured-card background-card-fade" id="background-card-2-fade">
                        <a href="./package/nl.camorobot.nodockerbackground/">
                            <div class="card-icon">
                                <img src="assets/icons/app-icon.png" alt="ICON">
                            </div>
                            <div class="card-name">
                                <p class="card-p">NoDocker Background</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="featured-card" id="background-card-3">
                    <div class="featured-card background-card-fade" id="background-card-3-fade">
                        <a href="./package/nl.camorobot.nodockerbackground/">
                            <div class="card-icon">
                                <img src="assets/icons/app-icon.png" alt="ICON">
                            </div>
                            <div class="card-name">
                                <p class="card-p">NoDocker Background</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRENDINGS SECTION-->

    <section class="Trendings">
        <div class="section-title">
            <h1>Trendings</h1>
        </div>
        <div class="tweak-wrapper">
            <div class="tweak-card" id="tweak-1">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tweak-card" id="tweak-2">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tweak-card" id="tweak-3">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tweak-card" id="tweak-4">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
                </div>
            </div>

<!--LINE TWO - TWEAKS -->

            <div class="tweak-card" id="tweak-5">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tweak-card" id="tweak-6">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tweak-card" id="tweak-1">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tweak-card" id="tweak-2">
                <div class="tweak-fade">
                    <a class="tc-grid" href="./package/nl.camorobot.nodockerbackground/">
                        <div class="tweak-icon">
                            <img src="assets/icons/app-icon.png" alt="ICON">
                        </div>
                        <div class="tweak-name">
                            <p class="tweak-p">NoDockerBackground</p>
                        </div>
                        <div class="tweak-p user">
                            <p>Camorobot</p>
                        </div>
                    </a>
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
            <p>Copyright 2019 - <?php echo date("Y"); ?></p>
        </div>
    </section>
    <script src="/assets/js/cookie.js"></script>
</body>
</html>