<?php
include "connect_write.php";

if($_POST['gefinal']=="0")
{
	
	
	mysqli_query($link,"delete from sms where status='N'");
	

}
else
{
	$id=implode(',',$_POST['sms']);
	$sql="delete from sms where id in ($id)";
	mysqli_query($link,$sql);
	
}

if(mysqli_affected_rows($link)>0)
{
	
	$_SESSION['success']="Pending Message Deleted Successfully.";
}
else
{
	$_SESSION['error']="Pending Message Delete Problems. Try Again!....";
}

mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>