<?php

    if (isset($_POST['signup-submit'])){
        require 'dbhandler.php';

        $username = $_POST['uid'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirm = $_POST['confim-password'];
        
        if(empty($username) || empty($email) || empty($password) || empty($passwordConfirm)){
            header('Location: /pages/sign-up?error=emptyfields&uid='.$username.'&mail='.$email);
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z,0-9]*$/", $username)) {
            header('Location: /pages/sign-up?error=invalidusername&invalidusername');
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location: /pages/sign-up?error=invalidmail&uid='.$username);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z,0-9]*$/", $username)) {
            header('Location: /pages/sign-up?error=invaliduid&mail='.$email);
            exit();
        }
        else if ($password !== $passwordConfirm) {
            header('Location: /pages/sign-up?error=passwordcheck&uid='.$username.'&mail='.$email);
            exit();
        }
        else{
            $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)){
                header('Location: /pages/sign-up?error=database_connection=='.mysqli_connect_error());
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0){
                    header('Location: /pages/sign-up?error=usertaken&mail='.$email);
                exit();
                }
                else{
                    $sql = "INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header('Location: /pages/sign-up?error=database_connection');
                        exit();
                    }
                    else{
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                        mysqli_stmt_execute($stmt);
                        mkdir("../accounts/".$username);

                        header('Location: /pages/login');
                        exit(); 
                    }
                }
            }
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

    else{
        header('Location: /');
    }
?>