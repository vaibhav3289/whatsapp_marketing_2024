<?php

include "connect_write.php";

		$emid=encryptor('decrypt',$_POST['id']);
$token=hash_hmac('sha256','/updategroup',$_SESSION['token']);

$flag=0;
 $gettoken=mysqli_real_escape_string($link,$_POST['token']);


if(hash_equals($token,$gettoken))
{

	
   $sql="UPDATE `vaccine_group` SET `v_group`='".mysqli_real_escape_string($link,trim($_POST['v_group']))."',`day`='".mysqli_real_escape_string($link,trim($_POST['day']))."',`grp_msg`='".mysqli_real_escape_string($link,trim($_POST['msgname']))."',`comp`='".mysqli_real_escape_string($link,trim($_POST['com']))."'  WHERE id='".$emid."' ";
  
  


mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Group  Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['error']="Group  Detail Record Update Problems.Try Again!....";
}
 }

else
{
	$_SESSION['error']="Something went wrong.. Please Try Again!!";
}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>