<?php include"header.php";

if( $_GET['to']==''){  $gtdate=date('Y-m-d'); } else {  $gtdate=$_GET['to'];}
if( $_GET['from']==''){  $gfdate=date('Y-m-d'); } else {  $gfdate=$_GET['from'];}

 ?>
<script>
function selectall(box)
{
	var All=document.getElementsByName('sms[]');
	for(i=0;i<All.length;i++)
	{
		All[i].checked=box.checked;
	}
}

</script> <script>
function del_sms(val)
{
	document.getElementById('gefinal').value=val;
		if(confirm("Do You Want To Delete Selected Pending Message?")==true)
       {
		   document.getElementById("smsid").action='<?php echo $path;?>phpfiles/delpendingdata';
         document.getElementById("smsid").submit();
       }
      else{
	      return false;
	  }
}
</script> <script>
function emp_sms(val1)
{
	document.getElementById('gefinal').value=val1;
		if(confirm("Do You Want To Empty Queue?")==true)
       {
		   document.getElementById("smsid").action='<?php echo $path;?>phpfiles/delpendingdata';
         document.getElementById("smsid").submit();
       }
      else{
	      return false;
	  }
}

</script> 
 
 
<div class="content-wrapper" >
   <section class="content-header"> 
  <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 col-xs-3">
            <strong>Pending Message Report </strong>
          </div>
          <div class="col-sm-6  col-xs-9">
            <ol class="breadcrumb float-right">
            
                <input type="button" name="Submit" value="Delete Selected" onClick="del_sms('1');" class="btn btn-sm btn-danger"> &nbsp;
                 <input type="button" name="Submit" value="Make Empty Queue" onclick="emp_sms('0');" class="btn btn-sm btn-primary">
            </ol>
          </div>
        </div>
      </div>
  
  
  
  
  
   
   
</section>

<section class="content">
  <div class="card card-default">
      <?php 
if(isset($_SESSION['success']) && $_SESSION['success']!="")
{
?>
      <div class="alert alert-success"> <strong>Success! </strong>
        <button class="close" data-dismiss="alert">×</button>
        <?php print $_SESSION['success']; ?></div>
      <?php
}
if(isset($_SESSION['error']) && $_SESSION['error']!="")
{?>
      <div class="alert alert-danger">
        <button class="close" data-dismiss="alert">×</button>
        <strong>Error! </strong> <?php print $_SESSION['error']; ?></div>
      <?php 
}
unset($_SESSION['success']);
unset($_SESSION['error']); 

?>
    <div class="card-body overflow-auto">
     
       <form method="post" action="" id="smsid">
           <input type="hidden" id="gefinal" name="gefinal" value="" />

      <table class="table table-sm table-striped table-bordered table-hover" id="example1">
        <thead>
          <tr>   <th><input name="sms_all" type="checkbox" class="style1" onclick="selectall(this)" value=""/></th>
            <th>Sr.No</th>
           <?php /*?> <th>Date</th><?php */?>
            <th>User Name</th>
            <th>Mobile No</th>
               <th>Message</th>
            <th>Status</th>
          
           </tr>
        </thead>
        <tbody>
			 <?php
            $i=1;							
         
                $sql="select * from `sms` where  status='N'  ";
          
            $res=mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($res)) {
                list($getusername)=mysqli_fetch_array(mysqli_query($link,"select name from user where u_id='$row[c_id]' "));
            ?>
          <tr class="odd gradeX">
          <td align="left"><input type="checkbox" name="sms[]" value="<?php echo $row['id']; ?>"></td>
            <td><?php echo $i;?></td>
            <?php /*?><td ><?php echo date('d-m-Y',strtotime($row['date'])); ?></td><?php */?>
            <td><?php echo $getusername; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['sms']; ?></td>
            <td><?php if($row['status']=='Y') { echo "p"; } else {  echo "s"; }?></td>
           
          
           
          </tr>
          <?php  $i++;} ?>
        </tbody>
      </table>
     </form>
    </div>
  </div>
</section>
   </div>
    <?php include"footer.php"; ?>