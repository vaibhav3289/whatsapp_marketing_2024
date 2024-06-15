<?php
error_reporting(0);
require_once('lib/Green_Config.php');
require_once('lib/GreenCheckSum.php');
include "../connect.php";

     
	// $name=mysqli_real_escape_string($link,trim($_POST['name']));

    list($mobile)=mysqli_fetch_array(mysqli_query($link,"select mobile from user where u_id='".$_POST['user']."'"));

$id=$_POST['user'];

$checkSum = "";
$paramList = array();

$gateway_type = 'Online';
$cust_Mobile = $mobile;
$cust_Email = 'abc@gmail.com';
$orderId = $id."_".time();
$txnAmount = $_POST['limit'];
$txnNote = 'NO Note';
$month = $_POST['month']; 

 //if(mysqli_affected_rows($link)>0)
 //{
	 


mysqli_query($link,"INSERT INTO `payment`(`u_id`, `amount`, `p_date`,`ref_id`,`status`,`plan_month`) VALUES ('".$id."','$txnAmount','".date('Y-m-d')."','".$orderId."','P','$month')");
//mysqli_query($link,"INSERT INTO `banner_setting`(`c_id`, `l_width`, `l_height`, `f_width`, `f_height`,`f_size`,`f_color`,`f_shape`,`fowidth`,`foheight`) VALUES ('".$id."','90','80','400','400','25','000000','Rectangle','50','50')");

//}

//echo $_GET['id'];exit;


$callback_url =  "http://localhost/whatsapp_marketing/userpanel/upi/txnResult.php";



$AHKWEB_TXN_URL='https://payment.gctsoft.in/order/process';   


// Create an array having all required parameters for creating checksum.
$paramList["upiuid"] = $upiuid;
$paramList["token"] = $token;
$paramList["orderId"] = $orderId ;
$paramList["txnAmount"] = $txnAmount;
$paramList["txnNote"] = $txnNote;
$paramList["callback_url"] = $callback_url;
$paramList["cust_Mobile"] = $cust_Mobile;
$paramList["cust_Email"] = $cust_Email;


$checkSum = GreenCheckSum::generateSignature($paramList,$secret);
?>
<html>
<head>
	<title>Gateway Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
	<form method="post" action="<?php echo $AHKWEB_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
				<?php
				foreach($paramList as $name => $value) {
					echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
				}
				?>
				<input type="hidden" name="checksum" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>
