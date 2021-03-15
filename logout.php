<?php
    session_start();
    $_SESSION['email']="";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
