<?php

error_reporting(0);
include "connect.php";

if($_POST['username']=='admin')
{
	
	
$query = mysqli_query($link,"SELECT * FROM `admin` WHERE `username`='$_POST[username]' AND `password`='$_POST[password]'");


}
else
{
	
//$query = mysqli_query($link,"SELECT * FROM `agent` WHERE `username`='$_POST[username]' AND `password`='$_POST[password]' ");

}

 $row=mysqli_fetch_array($query);
if(mysqli_affected_rows($link)>0)
{   



if($row['active']!='A' and $_POST['username']!='admin' ) {
  $_SESSION['err']="Agent Profile is De-activated";
     header("Location:".$_SERVER['HTTP_REFERER']);
     exit;
}
 
    
     $_SESSION['userid']=$row['id'];
     $_SESSION['username']=$row['name'];  
	 $_SESSION['uname']=$row['username']; 
	   
	 header('location:../view_user.php');
	
	 
}
else
{
     $_SESSION['err']="Username and password invalid";
     header("Location:".$_SERVER['HTTP_REFERER']);
     exit;
}
?>