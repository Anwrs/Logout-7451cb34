<?php 
if (isset($_POST['logout'])) {
    setcookie("loggedInUser", "", time() - 3600);
    header("location:login.php");
}