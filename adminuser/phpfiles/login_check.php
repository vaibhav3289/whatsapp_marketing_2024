 <?php 
 
 
session_start();


$path="//".$_SERVER['HTTP_HOST']."/whatsapp_marketing/";
date_default_timezone_set('Asia/Kolkata');



$link=mysqli_connect('localhost','root','',$_SESSION['DB'])  ;

$user=mysqli_real_escape_string($_POST['username']);
$pwd=mysqli_real_escape_string($_POST['password']);

$sql="select * from admin where username='$user' and password='$pwd'";
$res=mysqli_query($link,$sql);

if(mysqli_affected_rows($link)>0)
{ 

		//$_SESSION['user_type']=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM `profile`"));

	    $row=mysqli_fetch_array($res);

        $_SESSION['admin']=$row['id'];
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
		header('location:'.$path.'home');
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
		 
	

	header('location:'.$path.'login');
	exit;
 
}

mysqli_close($link);
?>