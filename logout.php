<?php
include_once './app/header.php';
if(isset($_SESSION['logged_user'])){
    unset($_SESSION['logged_user']);
    header("Location: /");
}
 else if(isset($_SESSION['logged_coach'])){
    unset($_SESSION['logged_coach']);
    header("Location: /");
}
?>
