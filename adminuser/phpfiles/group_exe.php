<?php

include "connect_write.php";

		
$token=hash_hmac('sha256','/addgrouptoken',$_SESSION['token']);

 $gettoken=mysqli_real_escape_string($link,$_POST['token']);

if(hash_equals($token,$gettoken))
{
	

     $sql="INSERT INTO `vaccine_group`(`v_group`,`day`,`grp_msg`,`comp`) VALUES ('".mysqli_real_escape_string($link,$_POST['v_group'])."','".mysqli_real_escape_string($link,$_POST['day'])."','".mysqli_real_escape_string($link,$_POST['msgname'])."','".mysqli_real_escape_string($link,$_POST['com'])."')";
	 

mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Group Record Save Successfully.";
} 
else 
{
	
    $_SESSION['err']="Group Record Save Problems.Try Again!....";
}
 }

else
{
	$_SESSION['err']="Something went wrong.. Please Try Again!!";
}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>