<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Camorobot's Repo</title>
</head>
<body>

    <section class="login-form">
        <div class="login-wrapper">
            <div class="wrapper-box">
                <div class="l-title">
                    <h1>Account</h1>
                </div>
                <div class="form">
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "emptyfields"){
                                echo '<strong><p class="php-error">Pleas full in all fields!</p></strong>';
                            }
                            else if($_GET['error'] == "wrongpassword"){
                                echo '<strong><p class="php-error php-user-password">Wrong password. Try again!</p></strong>';
                            }
                            else if($_GET['error'] == "nouser"){
                                echo '<strong><p class="php-error php-user-password">Wrong username. Try again!</p></strong>';
                            }
                        }
                    ?>
                    <form action="/assets/php/login.php" method="POST">
                        <div class="form-username">
                            <div class="form-text">
                                <p>Username</p>
                            </div>
                            <div class="form-input">
                                <input type="text" name="mailuid"></input>
                            </div>
                        </div>
                        <div class="form-password">
                            <div class="form-text">
                                <p>Password</p>
                            </div>
                            <div class="form-input">
                                <input type="password" name="password"></input>
                            </div>
                        </div>
                        <div class="form-button">
                            <button class="button" type="submit" name="login-submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="line"></div>
                <div class="box-register">
                    <p>Don't have a account? <a href="/pages/sign-up/">Sign up</a> free</p>
                </div>
            </div>
        </div>

    </section>

</body>
</html>