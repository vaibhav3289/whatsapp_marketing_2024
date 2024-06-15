<?php
include "header.php";

$grow=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM `contact` where c_id='$_GET[id]'"));
?>


?>
<script>
function getbl(val)
{
	
$('#ltbln').load('load_doctor.php?u_id='+val);
}
</script>

<div class="content-wrapper" >
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6 col-xs-6">
        <strong>Add Contact</strong>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="card">
    <div class="card-body">
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
if(isset($_SESSION['err_token']) && $_SESSION['err_token']!="")
{
?>
      <div class="alert alert-danger">
        <button class="close" data-dismiss="alert">×</button>
        <strong>Error! </strong> <?php print $_SESSION['err_token']; ?></div>
      <?php 
}
unset($_SESSION['success']);
unset($_SESSION['error']); 
unset($_SESSION['err_token']); 
?>
      <form class="form-horizontal" action="phpfiles/update_contact_exe.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
      
        <div class="row">
        
        <?php /*?><div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Date</label>
            <div id="shw_cate" class="input-group">
             <input type="date" name="date"  id="date"  class="form-control form-control-sm" value="<?php echo date('Y-m-d');?>"/>
             
            </div>
          </div><?php */?>
        
           <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Group Name</label>
                    <select class="form-control form-control-sm select2" id="g_id" name="g_id" onchange="getbl(this.value);" >
                   <option value>Select</option>
<?php
$qry=mysqli_query($link,"select * from groupwm order by g_id ASC");
while($qrow=mysqli_fetch_array($qry)){
	
?>
<option value="<?php echo $qrow['g_id']; ?>" <?php if($qrow['g_id']==$grow['g_id']){ echo "selected"; }?> ><?php echo $qrow['g_name']; ?></option>


<?php } ?>
</select>
                  
          </div>
          
          
          
          <?php /*?>  <div class="form-group col-sm-3 col-xs-6" id="ltbln">
            <label for="text1" class="control-label"> User Name </label>
                    <select class="form-control form-control-sm select2" id="u_id" name="u_id" >
                 <option value>Select  </option>
<?php

				 
list($user)=mysqli_fetch_array(mysqli_query($link,"select `u_id` from user order by u_id ASC "));
$qry1=mysqli_query($link,"select * from user where u_id='".$user."' ");
while($qrow1=mysqli_fetch_array($qry1)){
	
?>
<option value="<?php echo $qrow1['u_id']; ?>"><?php echo $qrow1['name']; ?></option>

<?php } ?>
</select>
                  
          </div><?php */?>
        
       
     
           <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Name</label>
            <div  class="input-group">
             <input  type="text" name="c_name" class="form-control form-control-sm" placeholder="Enter Contact Name"  autocomplete="off" value="<?php echo $grow['c_name']; ?>" required />
            </div>
          </div>
          
          
          
         
           <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Mobile Number</label>
            <div  class="input-group">
             <input  type="text" name="mobile" class="form-control form-control-sm" placeholder="Enter Mobile Number"  onkeyup="javascript:this.value=this.value.replace(/[^0-9^.]/g, '');" maxlength="10" autocomplete="off" value="<?php echo $grow['mobile'];?>"required />
            </div>
          </div>
            
          
        
         
          <div class="form-group col-sm-2 col-xs-6"> 
                    <label >&nbsp;</label>
            <div  class="input-group"> 
              <button class="btn btn-sm btn-success " type="submit" >Submit</button>&nbsp;
              <button class="btn btn-sm btn-default" type="button"  onclick="window.location.href='contact_detail.php'">Back</button>
          </div></div>
        </div>
      </form>
    </div>
  </div>
</section>
</div>


  <?php 

include "footer.php";
?>
