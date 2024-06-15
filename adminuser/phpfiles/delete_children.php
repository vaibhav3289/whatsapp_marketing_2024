<?php

include "connect_write.php";
$emid=encryptor('decrypt',mysqli_real_escape_string($link,$_GET['id']));
list($gechild)=mysqli_fetch_array(mysqli_query($link,"select count(1) from child_vaccine_list where c_id='".$emid."' and status='Y' "));
if($gechild > 0)
{
$_SESSION['error']='Please Delete Vaccine Data Of This Children';
mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

}
else{

	
mysqli_query($link,"DELETE FROM `child_vaccine_list` WHERE c_id='".$emid."'");

  $sql="DELETE FROM `children` WHERE id='".$emid."'";



mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Children  Detail Record Delete Successfully.";
} 
else 
{
	
    $_SESSION['error']="Children  Detail Record Delete Problems.Try Again!....";
}
}

	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>
