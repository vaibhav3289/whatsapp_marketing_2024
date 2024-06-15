<?php
include "header.php"; 
	


    $reload=rand(3,10);

    ?>
    <script>

        window.setInterval('refresh()', <?php echo $reload*1000; ?>);
        function refresh() {
            if(document.getElementById('status').value!='stop' && document.getElementById('status').value!='empty')
            {
                window .location.reload();
            }
        }
        var timer2 = "0:<?php echo $reload; ?>";
        var interval = setInterval(function() {
            if(document.getElementById('status').value!='stop' && document.getElementById('status').value!='empty')
            {
                var timer = timer2.split(':');
                var minutes = parseInt(timer[0], 10);
                var seconds = parseInt(timer[1], 10);
                --seconds;
                minutes = (seconds < 0) ? --minutes : minutes;
                if (minutes < 0) clearInterval(interval);
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
//minutes = (minutes < 10) ?  minutes : minutes;
$('#countdown').html(minutes + ':' + seconds);
timer2 = minutes + ':' + seconds;
}
else
{
    
    if(document.getElementById('status').value=='empty')
    {
        $('#countdown').html('Queue is Empty!!!');
        setInterval(function(){ window.close(); },2000);
    }
    else     
    {
        $('#countdown').html('Please Relogin WhatsApp');
        setInterval(function(){ window.close(); },2000);
    }

    clearInterval(interval);
    return;
}

}, 1000);
</script>
<div class="content-wrapper" >
  <section class="content-header">
  <input type="hidden" name="status" id="status" value="" />
  <div class="container-fluid">
    <div class="card">
      <div class="card-header"><h2>WhatsApp Server</h2></div>
      <div class="card-body" align="center"> <img src="images/gif3.gif" style="width:650px;" /> <br />
        <span class="h1" id="countdown"></span> </div>
        <!-- /.card-body --> 
    </div>
    <!-- /.card --> 
</div>
<!-- /.container-fluid --> 
</section>
<?php
list($url,$instance,$token,$wstatusn)=mysqli_fetch_array(mysqli_query($link,"select `wp_url`,`wp_instance`,`wp_token`,whatsapp from sms_setting where sms_id=1"));
$connected = @fsockopen("www.google.com", 80); //website and port
if ($connected){
    $is_conn = "Y";
}else{
    $is_conn = "N"; 
}
if($is_conn=="Y" and $wstatusn=='Y') 
{
    $result=mysqli_query($link,"SELECT * FROM `sms` WHERE `status`='N' LIMIT 5");
    if(mysqli_affected_rows($link)>0)
    {
        while($row=mysqli_fetch_array($result)) {
            $row['mobile']=str_replace('+','',$row['mobile']);
            if(strlen($row['mobile'])==10)
            {
                $row['mobile']='91'.$row['mobile'];
            
            $mobileNumber = $row['mobile'];

            $message = urlencode($row['sms']);

            $url1=str_replace('[number]',$mobileNumber,$url);
            $url1=str_replace('[msg]',$message,$url1);
            $url1=str_replace('[inst]',$instance,$url1);
            $url1=str_replace('[token]',$token,$url1);

            $output = file_get_contents($url1);
            $output=json_decode($output,'true');
            if($output['status']=="success")
            {
                mysqli_query($link,"UPDATE `sms` SET `status`='Y',`senttime`=NOW() WHERE `id`='$row[id]'");
            }
            else
            {
                echo "<script>document.getElementById('status').value='stop';</script>";
                break;
            }
			}
        }
    }
    else
    {
        echo "<script>document.getElementById('status').value='empty';</script>";
    }
}
?>
</div>
<?php include"footer.php";  ?>