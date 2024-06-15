<?php

include "connect_write.php";


$id=$_GET['id'];
   $sql="UPDATE `hospital` SET `h_name`='".mysqli_real_escape_string($link,trim($_POST['h_name']))."',`h_address`='".mysqli_real_escape_string($link,trim($_POST['h_address']))."',`h_city`='".mysqli_real_escape_string($link,trim($_POST['h_city']))."',`h_number`='".mysqli_real_escape_string($link,trim($_POST['h_number']))."' WHERE id='".$id."' ";
  

mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Hospital  Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['error']="Hospital  Detail Record Update Problems.Try Again!....";
}
 
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>