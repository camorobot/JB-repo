<?php
    if(isset($_SESSION['userid'])){
        header('Location/_/');
    }
    else{
        header('Location: /');
    }
?>