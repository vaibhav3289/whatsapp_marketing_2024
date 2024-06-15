 <?php 
 session_start();
$path="//".$_SERVER['HTTP_HOST']."/whatsapp_marketing/userpanel/";
date_default_timezone_set('Asia/Kolkata');



$link=mysqli_connect('localhost','root','','whatsapp_marketing')  ;

$user = $_POST['username'];
$pwd  = $_POST['password'];

$sql="select * from user where email='$user' and pass='$pwd'";
$res=mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0)
{ 

		//$_SESSION['user_type']=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM `profile`"));

	    $row=mysqli_fetch_array($res);

       $_SESSION['user']=$row['u_id'];
        if(isset($_POST['remeber']))
		{
			
			setcookie('USER',trim($_POST['username']), 365 * 60 * 24 * 60 + time(), '/');
			setcookie('PASS',trim($_POST['password']),365 * 60 * 24 * 60 + time(), '/');
			setcookie('REM',trim($_POST['remeber']), 365 * 60 * 24 * 60 + time(), '/');
			
		}
		else
		{
			setcookie('USER', NULL, -1, '/');
			setcookie('PASS', NULL, -1, '/');
			setcookie('REM', NULL, -1, '/');
			
		}
		
		header('location:'.$path.'group_detail.php');
		exit;
}
else
{
	 $_SESSION['error']="Please Enter Valid Credentials";
	 if(isset($_POST['remeber']))
	 {
		 setcookie('USER',trim($_POST['username']), 365 * 60 * 24 * 60 + time(), '/');
			setcookie('PASS',trim($_POST['password']),365 * 60 * 24 * 60 + time(), '/');
			setcookie('REM',trim($_POST['remeber']), 365 * 60 * 24 * 60 + time(), '/');
				}
		else
		{
			setcookie('USER', NULL, -1, '/');
			setcookie('PASS', NULL, -1, '/');
			setcookie('REM', NULL, -1, '/');
			
		}
		 
	

	header('location:../login.php');
	exit;
 
}

mysqli_close($link);
?>