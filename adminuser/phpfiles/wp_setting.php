<?php
include "connect.php";
$sql="UPDATE `sms_setting` SET `wp_instance`='".mysqli_real_escape_string($link,$_POST['wp_id'])."',`wp_token`='".mysqli_real_escape_string($link,$_POST['token'])."' WHERE `sms_id`=1";

mysqli_query($link,$sql);
if(mysqli_affected_rows($link)>0)
{
	$_SESSION['msg']="success|WhatsApp Setting Save Successfully.";
	}
else
{
	$_SESSION['msg']="danger|WhatsApp Setting Save Problems.Try Again!...";
}
     mysqli_close($link);
    header('Location:'.$_SERVER['HTTP_REFERER']);
?>