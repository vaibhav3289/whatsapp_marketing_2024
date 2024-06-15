<?php

include "connect_write.php";

		$emid=encryptor('decrypt',$_POST['id']);
$token=hash_hmac('sha256','/updateveccine',$_SESSION['token']);

$flag=0;
 $gettoken=mysqli_real_escape_string($link,$_POST['token']);


if(hash_equals($token,$gettoken))
{

	   $sql="UPDATE `vaccine` SET `g_id`='".mysqli_real_escape_string($link,trim($_POST['g_id']))."',`ve_name`='".mysqli_real_escape_string($link,trim($_POST['ve_name']))."',`vg_name`='".mysqli_real_escape_string($link,trim($_POST['vg_name']))."',`Birth_depend`='".mysqli_real_escape_string($link,trim($_POST['Birth_depend']))."',`gender`='".mysqli_real_escape_string($link,trim($_POST['gender']))."',`com`='".mysqli_real_escape_string($link,trim($_POST['com']))."',`vac_benefit`='".mysqli_real_escape_string($link,trim($_POST['bevac']))."'  WHERE id='".$emid."' ";
  
  


mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Vaccine Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['error']="Vaccine Detail Record Update Problems.Try Again!....";
}
 }

else
{
	$_SESSION['error']="Something went wrong.. Please Try Again!!";
}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>