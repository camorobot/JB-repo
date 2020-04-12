<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/package.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header-footer-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/package-mq.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/basics-mq.css">
    <title>Darkout - Camorobot's Repo</title>
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

    <section class="package-page">
        <div class="section-title">
            <h1>Darkout</h1>
        </div>
        <div class="package-wrapper" id="package-description">
            <div class="package-title">
                <h2>Description</h2>
            </div>
            <div class="package-text">
                <p>Nice theme for your ios device</p>
            </div>
        </div>
        <div class="package-wrapper" id="package-image">
            <div class="package-title">
                <h2>Images</h2>
            </div>
            <div class="package-grid" id="package-gid-image">
                <div class="package-img">
                    <img id="img-before" src="/assets/img/package/nl.camorobot.nodockerbackground/before.png" alt="before package">
                </div>
                <div class="package-img">
                   <img src="/assets/img/package/nl.camorobot.nodockerbackground/after.png" alt="after package">
                </div>
            </div>
        </div>
        <div class="package-wrapper" id="package-information">
            <div class="package-title">
                <h2>Information</h2>
            </div>
            <div class="package-grid">
                <div class="package-text">
                    <p>Developer</p>
                    <p>iOS support</p>
                    <p>Price</p>
                    <p>Updated</p>
                </div>
                <div class="package-text">
                    <p>Camorobot</p>
                    <p>11 - 13.3</p>
                    <p>Free</p>
                    <p>Apri 12, 2020</p>
                </div>
            </div>
        </div>
        <div class="package-wrapper" id="package-developer">
            <div class="package-title">
                <h2>Developer</h2>
            </div>
            <div class="package-grid">
                <div class="package-text">
                    <p>Name</p>
                    <p>Contact</p>
                    <p>Social Media</p>
                </div>
                <div class="package-text">
                    <p>Camorobot</p>
                    <p><a href="mailto:spam@boompje5.nl">Email</a></p>
                    <p><a href="https://twitter.com/camorobot">Twitter</a>, <a href="https://github.com/camorobot">Github</a></p>
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

</body>
</html>