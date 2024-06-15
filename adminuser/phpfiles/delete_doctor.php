<?php

include "connect_write.php";
$emid=encryptor('decrypt',mysqli_real_escape_string($link,$_GET['id']));
list($gechild)=mysqli_fetch_array(mysqli_query($link,"select count(1) from children where d_id='".$emid."' "));
if($gechild > 0)
{
$_SESSION['delete_hos']='Please Delete Children Of This Doctor';
mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

}
else{
	$sql="DELETE FROM `doctor` WHERE id='".$emid."'";
mysqli_query($link,$sql);  

if(mysqli_affected_rows($link)>0)
{
	$_SESSION['success']="Doctor  Detail Record Delete Successfully.";
} 
else 
{
	
    $_SESSION['delete_hos']="Doctor  Detail Record Delete Problems.Try Again!....";
}

}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);   
   
 ?>
