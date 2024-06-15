<?php

include "connect.php";

		

      $sql="INSERT INTO `user`(`name`,`mobile`,`email`,`pass`,`status`,`start_date`,`end_date`) VALUES ('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['mobile'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['pass'])."','".mysqli_real_escape_string($link,$_POST['status'])."')";
      


mysqli_query($link,$sql);  
$id = mysqli_insert_id($link);

mysqli_query($link,"INSERT INTO `payment`(`u_id`, `amount`, `date_time`, `p_date`) VALUES('$id')");

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