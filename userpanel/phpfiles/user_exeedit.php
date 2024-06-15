<?php  include "connect.php";

   $sql="UPDATE `user` SET `name`='".mysqli_real_escape_string($link,trim($_POST['name']))."',`mobile`='".mysqli_real_escape_string($link,trim($_POST['mobile']))."',`email`='".mysqli_real_escape_string($link,trim($_POST['email']))."',`pass`='".mysqli_real_escape_string($link,trim($_POST['pass']))."',`status`='".mysqli_real_escape_string($link,trim($_POST['status']))."',`start_date`='".mysqli_real_escape_string($link,trim($_POST['start_date']))."',`end_date`='".mysqli_real_escape_string($link,trim($_POST['end_date']))."'  WHERE  `u_id`='$_GET[id]'" ;
  
  


mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="User Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['err']="User Detail Record Update Problems.Try Again!....";
}


	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>