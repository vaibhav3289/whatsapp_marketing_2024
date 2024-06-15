<?php

include "connect.php";

		

      $sql="INSERT INTO `user`(`name`,`mobile`,`email`,`pass`,`status`,`start_date`,`end_date`) VALUES ('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['mobile'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['pass'])."','".mysqli_real_escape_string($link,$_POST['status'])."','".mysqli_real_escape_string($link,$_POST['start_date'])."','".mysqli_real_escape_string($link,$_POST['end_date'])."')";



mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="User Record Save Successfully.";
} 
else 
{
	
    $_SESSION['err']="User Record Save Problems.Try Again!....";
}
 
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>