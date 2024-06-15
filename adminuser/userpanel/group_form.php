<?php
include "header.php";
?>
<div class="content-wrapper" >
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6 col-xs-6">
        <strong>Add Group</strong>
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
if(isset($_SESSION['err']) && $_SESSION['err']!="")
{?>
      <div class="alert alert-danger">
        <button class="close" data-dismiss="alert">×</button>
        <strong>Error! </strong> <?php print $_SESSION['err']; ?></div>
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
unset($_SESSION['err']); 
unset($_SESSION['err_token']); 
?>
      <form class="form-horizontal" action="phpfiles/new_group_exe.php" method="post" enctype="multipart/form-data">
       
        <div class="row">
        
      
        
       
            <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> User</label>
                    <select class="form-control form-control-sm select2" id="u_id" name="u_id" onchange="getbl(this.value);" >
                    <option value>Select</option>
<?php
$qry=mysqli_query($link,"select * from user ");
while($qrow=mysqli_fetch_array($qry)){
	
?>
<option value="<?php echo $qrow['u_id']; ?>"><?php echo $qrow['name']; ?></option>

<?php } ?>
</select>                  
          </div>
          
           <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Group Name</label>
            <div  class="input-group">
             <input  type="text" name="g_name" class="form-control form-control-sm" placeholder="Enter Whatsapp Group"  autocomplete="off"required />
            </div>
          </div>
         
          <div class="form-group col-sm-2 col-xs-6"> 
             <label >&nbsp;</label>
            <div  class="input-group"> 
              <button class="btn btn-sm btn-success " type="submit" >Submit</button>&nbsp;
              <button class="btn btn-sm btn-default" type="button"  onclick="window.location.href='<?php echo $path;?>group_detail.php'">Back</button>
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
