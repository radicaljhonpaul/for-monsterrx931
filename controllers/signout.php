<?php
    session_start();
    unset($_SESSION["inputUsernameEmail"]);
    unset($_SESSION["inputPassword"]);
    session_destroy();
    header("Location:../index.php");
?>