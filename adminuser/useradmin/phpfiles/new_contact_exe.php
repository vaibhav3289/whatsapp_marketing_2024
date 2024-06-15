<?php

include "connect.php";

		


     $sql="INSERT INTO `contact`(`g_id`,`u_id`,`c_name`,`mobile`) VALUES ('".mysqli_real_escape_string($link,$_POST['g_id'])."','".mysqli_real_escape_string($link,$_POST['u_id'])."','".mysqli_real_escape_string($link,$_POST['c_name'])."','".mysqli_real_escape_string($link,$_POST['mobile'])."')";
	 

mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Contact Record Save Successfully.";
} 
else 
{
	
    $_SESSION['err']="Contact Record Save Problems.Try Again!....";
}
 
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>