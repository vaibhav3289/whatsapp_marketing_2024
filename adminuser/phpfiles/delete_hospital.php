<?php

include "connect_write.php";
$id=$_GET['id'];

list($gettotcu)=mysqli_fetch_array(mysqli_query($link,"select count(1) from doctor where h_id='$id' "));
list($gechild)=mysqli_fetch_array(mysqli_query($link,"select count(1) from children where h_id='$id' "));

if($gettotcu > 0)
{
$_SESSION['delete_hos']='Please Delete Doctor From This Hospital';
mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

}
else if($gechild > 0)
{
$_SESSION['delete_hos']='Please Delete Children From This Hospital';
mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

}

else{

  $sql="DELETE FROM `hospital` WHERE id='$id'";



mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['hos_success']="Hospital  Detail Record Delete Successfully.";
} 
else 
{
	
    $_SESSION['delete_hos']="Hospital  Detail Record Delete Problems.Try Again!....";
}

}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>
