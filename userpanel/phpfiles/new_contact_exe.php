<?php

include "connect.php";

//print_r($_POST);exit;		
list($name)=mysqli_fetch_array(mysqli_query($link,"select name from user where `u_id`='$_POST[u_id]' "));
list($gname)=mysqli_fetch_array(mysqli_query($link,"select g_name from groupwm where `g_id`='$_POST[g_id]' "));
 

     $sql="INSERT INTO `contact`(`g_id`,`u_id`,`c_name`,`mobile`) VALUES ('".mysqli_real_escape_string($link,$_POST['g_id'])."','".mysqli_real_escape_string($link,$_SESSION['user'])."','".mysqli_real_escape_string($link,$_POST['c_name'])."','".mysqli_real_escape_string($link,$_POST['mobile'])."')";
	 	//echo $sql;exit; 
	list($url,$instance,$token,$wstatusn)=mysqli_fetch_array(mysqli_query($link,"select `wp_url`,`wp_instance`,`wp_token`,whatsapp from sms_setting where sms_id=1"));
	
	

            $getfemsg="Congratulations on joining us as a member, ".$name." Welcome to our group as a new member";
			
	
	        if($wstatusn=='Y')
			{
			if(trim($instance)!='' && trim($token)!='')
			{
					
			if(strlen($gcustnum)==10)
            {
			
			
            $gcust1num='91'.$gcustnum;
            $mobileNumber = $gcust1num;
            $message = urlencode($getfemsg);
            $url1=str_replace('[number]',$mobileNumber,$url);
            $url1=str_replace('[msg]',$message,$url1);
            $url1=str_replace('[inst]',$instance,$url1);
            $url1=str_replace('[token]',$token,$url1);
  			$output = file_get_contents($url1);
		    $output=json_decode($output,'true');
			if($output['status']=="success")
            {
			mysqli_query($link,"INSERT INTO `sms`(`sms`, `c_id`,`g_id`,`mobile`, `status`, `timestamp`, `type`,`hdate`,`senttime`) VALUES ('".$message."','".$emid."','".$gnidnew."','".$gcustnum."','Y',NOW(),'Give Vaccine','".$_POST['vdate']."',NOW())");
		   }}}}

	  
mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {

$_SESSION['success']="Contact Record Save Successfully.";
} 
else 
{
	
    $_SESSION['err']="Contact Record Save Problems.Try Again!....";
}
 
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>