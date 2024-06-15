<?php
include "connect.php";

$old=$_POST['old'];
$new=$_POST['new'];
$confirm=$_POST['confirm'];


$sql="select * from comapny where c_id='$_SESSION[user]' and password='$old'";
mysqli_query($link,$sql);
if(mysqli_affected_rows()>0)
{
	$sql="update comapny set password='$new' where c_id='$_SESSION[user]' and password='$old'";
	mysqli_query($link,$sql);
	if(mysqli_affected_rows()>0)
	{
		$_SESSION['err_pin']="<font color='#0000FF'>Password Change Successfully.</font>";
		header('Location:../change_password.php');
	}
	else
	{
		$_SESSION['err_pin']="<font color='#FF0000'>Password Change Problems. Try Again!.....</font>";
		header('Location:../change_password.php');
	}
}
else
{
	$_SESSION['err_pin']="<font color='#FF0000'>Old Password Doesn't Match.</font>";
	header('Location:../change_password.php');
}
?>