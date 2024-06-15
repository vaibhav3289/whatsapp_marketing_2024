<?php  include "connect.php";

   $sql="UPDATE `contact` SET `g_id`='".mysqli_real_escape_string($link,trim($_POST['g_id']))."',`u_id`='".mysqli_real_escape_string($link,trim($_POST['u_id']))."',`c_name`='".mysqli_real_escape_string($link,trim($_POST['c_name']))."',`mobile`='".mysqli_real_escape_string($link,trim($_POST['mobile']))."'  WHERE  `c_id`='$_GET[id]'" ;
  
  


mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Contact Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['err']="Contact Detail Record Update Problems.Try Again!....";
}


	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>