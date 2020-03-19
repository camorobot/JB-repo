<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    <link rel="stylesheet" type="text/css" href="../../css/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
    <title>Login - Camorobot's Repo</title>
</head>
<body>
    
    <!--HEADER-->

    <section class="header">
        <nav class="header-nav">
            <ul class="header-ul">
                <li><a href="https://camorobot.netlify.com" class="header-ul-left">Camorobot</a></li>
                <div class="nav-stack">
                    <li class="header-ul-right"><a href="assets/pages/login">Login</a></li>
                    <li class="header-ul-right"><a href="assets/pages/sing-up">Sign up</a></li>
                </div>
            </ul>
        </nav>
    </section>

    <!--LOGIN FORM-->

    <section class="login-form">
        <div class="login-wrapper">
            <div class="wrapper-box">
                <div class="l-title">
                    <h1>Account</h1>
                </div>
                <div class="form">
                    <form action="../../php/access.php" method="POST">
                        <div class="form-text">
                            <p>Username</p>
                        </div>
                        <div class="form-input">
                            <input type="text" name="username"></input>
                        </div>
                        <div class="form-text">
                            <p>Password</p>
                        </div>
                        <div class="form-input">
                            <input type="password" name="password"></input>
                        </div>
                        <div class="form-button">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="line"></div>
                <div class="box-register">
                    <p>Don't have a account? <a href="../register">Sign up</a> free</p>
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
                        <p class="footer-text">Together we can achieve whatever we want</p>
                    </div>
                </div>
                <div class="footer-margin footer-collum-2">
                    <div class="footer-title">
                        <h2>Explore</h2>
                    </div>
                    <div class="footer-text-box">
                        <a href="/assets/pages/login" class="footer-text">Account</a>
                        <br><a href="https://camorobot.netlify.com" class="footer-text">Repository</a>
                    </div>
                </div>
                <div class="footer-margin footer-collum-3">
                    <div class="footer-title">
                        <h2>Sitemap</h2>
                    </div>
                    <div class="footer-text-box">
                        <a href="/assets/pages/login" class="footer-text">Login</a>
                        <br><a href="/assets/pages/register" class="footer-text">Register</a>
                        <br><a href="cydia://url/https://cydia.saurik.com/api/share#?source=https://camorobot.netlify.com" class="footer-text">Add to cydia</a>
                        <br><a href="#featured-box" class="footer-text">Tweaks</a>
                    </div>
                </div>
                <div class="footer-margin footer-collum-3">
                    <div class="footer-title">
                        <h2>Policies</h2>
                    </div>
                    <div class="footer-text-box">
                        <a href="/assets/pages/policies/privacy" class="footer-text">Privacy</a>
                        <br><a href="/assets/pages/policies/terms-of-service" class="footer-text">Terms of Service</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-line"></div>
            <div class="footer-text-box footer-rights">
                <p>Copyright 2019 - 2020</p>
            </div>
        </div>
        </section>

</body>
</html>