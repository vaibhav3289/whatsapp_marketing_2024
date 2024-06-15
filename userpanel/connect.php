
<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$link=mysqli_connect('localhost','root','','whatsapp_marketing');
$path="//".$_SERVER['HTTP_HOST']."/whatsapp_marketing/";
?>
