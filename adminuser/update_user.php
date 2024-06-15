<?php
include "header.php";


$grow=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM `user` WHERE `u_id`='$_GET[id]'"));
?>
<div class="content-wrapper" >
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6 col-xs-6">
        <strong>Update User</strong>
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
      <form class="form-horizontal" action="phpfiles/user_exeedit.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="token" >
        <div class="row">
        
        <?php /*?><div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Date</label>
            <div id="shw_cate" class="input-group">
             <input type="date" name="date"  id="date"  class="form-control form-control-sm" value="<?php echo date('Y-m-d');?>"/>
             
            </div>
          </div><?php */?>
        
        
          <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Name</label>
            <div  class="input-group">
             <input  type="text" name="name" class="form-control form-control-sm" placeholder="Enter User Name"  autocomplete="off" required value="<?php echo $grow['name'];?>"/>
            </div>
          </div>
          <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Mobile Number</label>
            <div  class="input-group">
             <input  type="text" name="mobile" class="form-control form-control-sm" placeholder="Enter User Mobile Number"  onkeyup="javascript:this.value=this.value.replace(/[^0-9^.]/g, '');" maxlength="10" autocomplete="off"required value="<?php echo $grow['mobile'];?>"/>
            </div>
          </div>
            <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Email</label>
            <div  class="input-group">
             <input  type="text" name="email" class="form-control form-control-sm" placeholder="Enter User Email"  autocomplete="off"required value="<?php echo $grow['email']; ?>"/>
            </div>
          </div>
           
          <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Password</label>
            <div  class="input-group">
             <input  type="text" name="pass" class="form-control form-control-sm" placeholder="Enter User Password"  autocomplete="off" required value="<?php echo $grow['pass']; ?>" />
            </div>
          </div>
          
           <div class="form-group col-sm-2 col-xs-6">

                <label for="text1" class="control-label">Status</label>
                <div  class="input-group">
                <input name="status" type="radio" value="YES" <?php if($grow['status']=="YES") { ?> checked="checked"<?php } ?>    required="required"/>&nbsp; Yes &nbsp;
                <input name="status" type="radio" value="NO" <?php if($grow['status']=="NO") { ?> checked="checked"<?php } ?>    required="required"/>&nbsp; No &nbsp;
                
            </div>
            </div>
            
      
            <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Start Date</label>
            <div  class="input-group">
            <input type="date" name="start_date" class="form-control form-control-sm" placeholder="Enter Start Date"  autocomplete="off"required value="<?php echo $grow['start_date']; ?>"/>
            </div>
            </div>
          
          
                 <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">End Date</label>
            <div  class="input-group">
             <input type="date" name="end_date" class="form-control form-control-sm" placeholder="Enter End Date"  autocomplete="off" required value="<?php echo $grow['end_date']; ?>"/>
            </div>
          </div>
        
         
          <div class="form-group col-sm-2 col-xs-6"> 
                    <label >&nbsp;</label>
            <div  class="input-group"> 
              <button class="btn btn-sm btn-success " type="submit" >Submit</button>&nbsp;
              <button class="btn btn-sm btn-default" type="button"  onclick="window.location.href='view_user.php'">Back</button>
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
