<?php
session_start();
include "connect.php";

$old=$_POST['old'];
$new=$_POST['new'];
$cpass=$_POST['confirm'];
 
 if($new!=$cpass)
 {
$_SESSION['error']="New Password And Confirm Password Doesn't Match.";
header('Location:' . $_SERVER['HTTP_REFERER']);
	exit;	

 }



$sql="select * from user where u_id='".$_SESSION['user']."' and pass='$old'";

mysqli_query($link,$sql);
if(mysqli_affected_rows($link)>0)
{
	  $sql="update user set pass='$new' where u_id='".$_SESSION['user']."'";

	mysqli_query($link,$sql);
	if(mysqli_affected_rows($link)>0)
	{
		$_SESSION['success']="Password Change Successfully.";
		header('Location:../change_password.php');
	}
	else 
	{
		$_SESSION['error']="Password Change Problems. Try Again!.....";
		header('Location:../change_password.php');
	}
}
else
{
	$_SESSION['error']="Old Password Doesn't Match.";
	header('Location:../change_password.php');
}
?>