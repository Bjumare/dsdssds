<?php
    session_start();
//    session_destroy();
//    session_id();
//    session_regenerate_id();
//    session_unset();
// use this page to test if someone is "logged in"
if(!isset($_SESSION['username']) ){
    header('Location: ./login.php');
    exit();
}
//
?>