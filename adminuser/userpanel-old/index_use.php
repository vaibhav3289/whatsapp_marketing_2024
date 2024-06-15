<?php
include"connect.php";


$query = mysqli_query($link,"SELECT * FROM `user` WHERE `email`='$_POST[email]' AND `pass`='$_POST[pass]'");
if(mysqli_affected_rows($link)>0)
{   
    $row=mysqli_fetch_array($query);
    $_SESSION['u_id']=$row['u_id']; 
    $_SESSION['name']=$row['name']; 
     header("Location:../group_detail.php");
}
else
{
     $_SESSION['error']="Username and password invalid";
     header("Location:".$_SERVER['HTTP_REFERER']);
     exit;
}
?>