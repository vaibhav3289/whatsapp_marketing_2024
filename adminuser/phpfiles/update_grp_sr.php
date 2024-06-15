<?php include "connect_write.php";
 $sql="UPDATE `vaccine_group` SET `sr_no`='".mysqli_real_escape_string($link,$_GET['val'])."' where  id='".mysqli_real_escape_string($link,$_GET['id'])."'"; 

  mysqli_query($link,$sql);
if(mysqli_affected_rows($link)>0)
			{
				
			echo '<i class="fa fa-check text-success" ></i>';
			}
			else
			{
			echo '<i class="fa fa-times text-danger"></i>';
			}
 
 


 	mysqli_close($link);
?>
