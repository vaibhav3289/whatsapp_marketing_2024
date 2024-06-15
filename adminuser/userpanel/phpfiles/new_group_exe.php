<?php

include "connect.php";


 $sql="INSERT INTO `groupwm`(`u_id`,`g_name`) VALUES ('".mysqli_real_escape_string($link,$_POST['u_id'])."','".mysqli_real_escape_string($link,$_POST['g_name'])."')";
	 

mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Group Record Save Successfully.";
} 
else 
{
	
    $_SESSION['error']="Group Record Save Problems.Try Again!....";
}

	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>