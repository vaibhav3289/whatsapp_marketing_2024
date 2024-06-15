<?php include "connect.php";

mysqli_query($link,"DELETE FROM `contact` WHERE `c_id`='$_GET[id]'");

if(mysqli_affected_rows($link)>0)
{
$_SESSION['success']='Contact Record Deleted Successfully';
}


header('Location:'.$_SERVER['HTTP_REFERER']);
exit;
?>