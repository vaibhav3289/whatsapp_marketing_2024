<?php
include"connect.php";
$query = mysqli_query($link,"SELECT * FROM `address_book` WHERE `a_email`='$_POST[email]' AND `a_password`='$_POST[password]'");
if(mysqli_affected_rows($link)>0)
{   
    $row=mysqli_fetch_array($query);
    $_SESSION['aid']=$row['a_id']; 
    $_SESSION['aname']=$row['a_name']; 
     header("Location:../use_dashbord.php");
}
else
{
     $_SESSION['error']="Username and password invalid";
     header("Location:".$_SERVER['HTTP_REFERER']);
     exit;
}
?>