<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['user_log']);
header('location:../login.php');
?>