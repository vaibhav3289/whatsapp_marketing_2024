<?php

include "connect_write.php";

		
$token=hash_hmac('sha256','/addvaccinetoken',$_SESSION['token']);

 $gettoken=mysqli_real_escape_string($link,$_POST['token']);

if(hash_equals($token,$gettoken))
{
	

      $sql="INSERT INTO `vaccine`(`g_id`,`ve_name`,`Birth_depend`,`gender`,`com`,`vac_benefit`) VALUES ('".mysqli_real_escape_string($link,$_POST['g_id'])."','".mysqli_real_escape_string($link,$_POST['ve_name'])."','".mysqli_real_escape_string($link,$_POST['Birth_depend'])."','".mysqli_real_escape_string($link,$_POST['gender'])."','".mysqli_real_escape_string($link,$_POST['com'])."','".mysqli_real_escape_string($link,$_POST['bevac'])."')";



mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Vaccine Record Save Successfully.";
} 
else 
{
	
    $_SESSION['err']="Vaccine Record Save Problems.Try Again!....";
}
 }

else
{
	$_SESSION['err']="Something went wrong.. Please Try Again!!";
}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>