<?php
error_reporting(0);
session_start();


//$link=mysqli_connect('localhost','greendvc_user','NEWgreen@2019#',$_SESSION['DB']) or die(mysqli_connect_error());
$link=mysqli_connect('localhost','root','','greendvc_vaccine') or die(mysqli_connect_error());
?>