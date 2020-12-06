<?php
// Verifying whether a cookie is set or not
if(isset($_COOKIE["Allow_Cookies"])){
    echo "Hi " . $_COOKIE["Allow_Cookies"];
} else{
    echo "Welcome Guest!";
}
?>