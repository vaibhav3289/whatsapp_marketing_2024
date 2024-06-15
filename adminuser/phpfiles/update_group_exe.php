<?php  include "connect.php";

   $sql="UPDATE `groupwm` SET `g_id`='".mysqli_real_escape_string($link,trim($_POST['u_id']))."',`g_name`='".mysqli_real_escape_string($link,trim($_POST['g_name']))."'  WHERE  `g_id`='$_GET[id]'" ;
  
  


mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Group Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['err']="Group Detail Record Update Problems.Try Again!....";
}


	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>