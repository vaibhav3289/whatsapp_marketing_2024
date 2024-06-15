<?php

include "connect.php";

		
 list($name)=mysqli_fetch_array(mysqli_query($link,"select name from user where `u_id`='".$row['g_id']."'"));
 
 list($name)=mysqli_fetch_array(mysqli_query($link,"select name from user where `u_id`='".$row['g_id']."'"));
 

     $sql="INSERT INTO `contact`(`g_id`,`u_id`,`c_name`,`mobile`) VALUES ('".mysqli_real_escape_string($link,$_POST['g_id'])."','".mysqli_real_escape_string($link,$_POST['u_id'])."','".mysqli_real_escape_string($link,$_POST['c_name'])."','".mysqli_real_escape_string($link,$_POST['mobile'])."')";
	  
mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
	 $authKey = $key;
                $msg=str_replace('[NAME]',$cname,$out_material);
                $msg=str_replace('[MAT]',trim($m_name),$msg);
                $msg=str_replace('[CNAME]',trim($company),$msg);
                $msg=str_replace('[WEIGHT]',mysqli_real_escape_string($link,trim($_POST['mtr_weight'])),$msg);
                $msg=str_replace('[AMT]',mysqli_real_escape_string($link,trim($_POST['mtr_total'])),$msg);
                $msg=str_replace('[DCNO]',mysqli_real_escape_string($link,trim($_POST['roylty_dc_no'])),$msg);
                $msg=str_replace('[DCWEIGHT]',mysqli_real_escape_string($link,trim($_POST['roylty_weight'])),$msg);
                $msg=str_replace('[DCAMT]',mysqli_real_escape_string($link,trim($_POST['roylty_total'])),$msg);
                $msg=str_replace('[CHLN]',mysqli_real_escape_string($link,trim($_POST['challn_no'])),$msg);
                $msg=str_replace('[LOADER]',mysqli_real_escape_string($link,trim($_POST['load_charge_total'])),$msg);
                $msg=str_replace('[TRUCK]',trim($truck),$msg);
                $msg=str_replace('[DATE]',mysqli_real_escape_string($link,trim($_POST['date'])),$msg);
                
                $mobileNumber = $mobile;
                list($wpurl,$instance,$token,$wpstatus)=mysqli_fetch_array(mysqli_query($link,"SELECT `wp_url`,`wp_instance`,`wp_token`,`whatsapp` FROM `sms_setting` WHERE `sms_id`='1'"));

        if($wpstatus=='Y')
                        {
                                if(trim($instance)!='' && trim($token)!='')
                                {
                                        if(strlen($mobileNumber)==10) $mobileNumber='91'.$mobileNumber;
                                        $url1=str_replace('[number]',$mobileNumber,$wpurl);
                                        $url1=str_replace('[msg]',urlencode($msg),$url1);
                                        $url1=str_replace('[inst]',$instance,$url1);
                                        $url1=str_replace('[token]',$token,$url1);
               
                                        $output = file_get_contents($url1);
                                        $output=json_decode($output,'true');
                                        if($output['status']=="success")
                                        {
                                                mysqli_query($link,"INSERT INTO `sms`( `sms`, `mobile`, `wp_status`, `wp_senttime`, `timestamp`, `track`, `type`,`sms_status`) VALUES ('$msg','$mobile','done',NOW(),NOW(),'".$output['status']."','MATERIAL OUT','done')");
                                        }
                                }
                        }
                        else
                        {
                
                $senderId = $mask;
                $message = urlencode($msg);
                $route = "4";
                
                $postData = array(
                        'authkey' => $authKey,
                        'mobiles' => $mobileNumber,
                        'message' => $message,
                        'sender' => $senderId,
                        'route' => $route
                );
                
                //API URL
                $url="http://panel.msgclub.net/sendhttp.php";
                
                // init the resource
                $ch = curl_init();
                curl_setopt_array($ch, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => $postData
                        //,CURLOPT_FOLLOWLOCATION => true
                ));
                $output = curl_exec($ch);
                $yummy = json_decode($output);
                $response=$yummy->response;
                $responseCode=$yummy->responseCode;
                curl_close($ch);
                
                
                if($output!="")
                {
                        mysqli_query($link,"INSERT INTO `sms`( `sms`, `mobile`, `status`, `senttime`, `timestamp`, `track`, `type`) VALUES ('$msg','$mobile','Y',NOW(),NOW(),'".($response.'('.$responseCode.')')."','MATERIAL OUT')");
                }

                        }
	 
$_SESSION['success']="Contact Record Save Successfully.";
} 
else 
{
	
    $_SESSION['err']="Contact Record Save Problems.Try Again!....";
}
 
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>