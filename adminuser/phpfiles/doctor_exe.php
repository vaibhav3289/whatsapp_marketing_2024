<?php

include "connect_write.php";

if($_POST['bod']!="") $dob=date('Y-m-d',strtotime($_POST['bod'])); else $dob="0000-00-00";

	

     $sql="INSERT INTO `doctor`(`d_name`,`d_number`,`bod`,`gender`,`email`,`address`,`qualification`,`h_id`) VALUES ('".mysqli_real_escape_string($link,$_POST['d_name'])."','".mysqli_real_escape_string($link,$_POST['d_number'])."','".mysqli_real_escape_string($link,$_POST['bod'])."','".mysqli_real_escape_string($link,$_POST['gender'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['address'])."','".mysqli_real_escape_string($link,$_POST['qualification'])."','".mysqli_real_escape_string($link,$_POST['h_id'])."')";
	 

mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Doctor Record Save Successfully.";
} 
else 
{
	
    $_SESSION['error']="Doctor Record Save Problems.Try Again!....";
}

	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>