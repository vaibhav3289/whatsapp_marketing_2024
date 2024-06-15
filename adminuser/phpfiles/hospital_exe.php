<?php

include "connect_write.php";

		


	

     $sql="INSERT INTO `hospital`(`h_name`,`h_address`,`h_city`,`h_number`,`start_time`,`stop_time`) VALUES ('".mysqli_real_escape_string($link,$_POST['h_name'])."','".mysqli_real_escape_string($link,$_POST['h_address'])."','".mysqli_real_escape_string($link,$_POST['h_city'])."','".mysqli_real_escape_string($link,$_POST['h_number'])."',NOW(),NOW())";
	 

mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Hospital Record Save Successfully.";
} 
else 
{
	
    $_SESSION['err']="Hospital Record Save Problems.Try Again!....";
}



	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>