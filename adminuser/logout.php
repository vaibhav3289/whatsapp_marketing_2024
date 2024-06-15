<?php
session_start();
session_destroy();
$path="//".$_SERVER['HTTP_HOST']."/whatsapp_marketing/";
header('location:'.$path);
?>