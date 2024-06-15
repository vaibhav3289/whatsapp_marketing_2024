<?php
error_reporting(0);
include "../connect.php";
require_once('lib/Green_Config.php');
require_once('lib/GreenCheckSum.php');
//print_r($_POST);
$verifySignature = '';
$array = array();
$paramList = array();

$status = $_POST['status']; // Its Payment Status Only, Not Txn Status.
$message = $_POST['message']; // Txn Message.
$cust_Mobile = $_POST['cust_Mobile']; // Txn Message.
$cust_Email = $_POST['cust_Email']; // Txn Message.
$hash = $_POST['hash']; // Encrypted Hash / Generated Only SUCCESS Status.
$checksum = $_POST['checksum'];  // Checksum verifySignature / Generated Only SUCCESS Status.

//echo $status;exit;


// Payment Status.
if($status=="SUCCESS"){
	
	$paramList = hash_decrypt($hash,$secret);
	$verifySignature = GreenCheckSum::verifySignature($paramList, $secret, $checksum);

// Checksum verify.
	if($verifySignature){
		
		
		$array = json_decode($paramList);


	$orderId=$array->orderId;

	
// Payment Response

list($pay_id,$uid,$p_month)=mysqli_fetch_array(mysqli_query($link,"SELECT `p_id`,`u_id`,`plan_month` FROM `payment` WHERE `ref_id`='$orderId'"));

mysqli_query($link,"UPDATE `payment` SET `status`='D' WHERE `p_id`='".$pay_id."'");
			
				if(mysqli_affected_rows($link)>0)
				{
					$sdate=date('Y-m-d');
if($p_month='1')
{

$date = date('Y-m-d', strtotime('+1 month', strtotime($sdate)));

}elseif($p_month='3')
{
$date = date('Y-m-d', strtotime('+3 month', strtotime($sdate)));

}elseif($p_month='6'){

$date = date('Y-m-d', strtotime('+6 month', strtotime($sdate)));

}elseif($p_month='12')
{

$date=date('Y-m-d', strtotime('+1 year'));

}                    //  echo "UPDATE `user` SET `start_date`='".$sdate."',`end_date`='".$date."' WHERE `u_id`='".$uid."'";exit;

					mysqli_query($link,"UPDATE `user` SET `start_date`='".$sdate."',`end_date`='".$date."' WHERE `u_id`='".$uid."'");	
					$_SESSION['user']=$uid;
					$_SESSION['mobile']=$cust_Mobile;

					 $_SESSION['success']="Your subscription has been confirmed.Your account has been created. ";
					header('Location:'.$path.'group_detail.php');
					exit;
				}
				else
				{
					$_SESSION['err']="Your subscription not confirmed...!try Again ";
				}
			
		
	}else{
		
		$_SESSION['error']="Payment Falied";	
		header('Location:'.$path.'login.php');
	}	
	

} else {
	
		$_SESSION['error']="Payment failed";	
		header('Location:'.$path.'login.php');
}
	
?>