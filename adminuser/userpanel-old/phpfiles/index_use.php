<?php
include "../../phpfiles/connect.php";
//print_r ($_SESSION['user']);


$user=$_POST['username'];
$pass=$_POST['password'];


$sql="select * from user where email='$user' and password='$pass'";
	

$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_affected_rows($link)>0)
{
	$_SESSION['user']=$row['u_id'];
	$_SESSION['user_log']=$row['name'];
	
	header('location:../group_detail.php');
}
else
{
	$_SESSION['err']="InValid username and Password.";
	header('location:../index.php');
}
?>