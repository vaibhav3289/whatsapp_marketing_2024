<?php
include "connect.php";


	$id=implode(',',$_POST['sms']);
	$sql="delete from sms where id in ($id)";
	mysqli_query($link,$sql);
	

if(mysqli_affected_rows($link)>0)
{
	
	$_SESSION['success']="Send Message Deleted Successfully.";
}
else
{
	$_SESSION['error']="Send Message Delete Problems. Try Again!....";
}

mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>