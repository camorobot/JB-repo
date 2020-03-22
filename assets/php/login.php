<?php

    if (isset($_POST['login-submit'])){
        require 'dbhandler.php';

        $mailuid = $_POST['mailuid'];
        $password = $_POST['password'];

        if(empty($mailuid) || empty($password)){
            header('Location: /pages/login?error=emptyfields&mailuid');
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header('Location: /pages/login?error=database_error');
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
                mysqli_stmt_execute($stmt);
                $results = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($results)){
                    $pwdCheck = password_verify($password, $row['pwdUsers']);
                    if ($pwdCheck == false){
                        header('Location: /pages/login?error=wrongpassword');
                        exit();
                    }
                    else if($pwdCheck == true){
                        session_start();
                        $_SESSION['userid'] = $row['idUsers'];
                        $_SESSION['useruid'] = $row['uidUsers']; 
                        header('Location: /_/');
                        exit(); 
                    }

                    else{
                        header('Location: /pages/login?error=wrongpassword');
                        exit();
                    }
                }
                else{
                    header('Location: /pages/login?error=nouser');
                    exit();
                }
            }
        }
    }
    else{
        header('location: /');
    }
?>