<?php
include "header.php";
?>


<div class="content-wrapper" >
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6 col-xs-6">
        <strong>Add Message</strong>
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
      <form class="form-horizontal" action="phpfiles/one_msg_exe.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="cid" value="<?php echo $_SESSION['user']; ?>">
        <div class="row">
        
        <div class="form-group col-sm-3 col-xs-6">
                <label for="text1" class="control-label">Mobile No &nbsp;<span style="color:#F00">*</span></label>
                <div>
                  <input type="text" placeholder="Mobile No" tabindex="9" name="mobile" autocomplete="off" class="form-control form-control-sm" required  onkeyup="javascript:this.value=this.value.replace(/[^0-9^.]/g, '');" maxlength="10"/>
                </div>
              </div>
          
     
        
       
     
           <div class="form-group col-sm-6 col-xs-6">
            <label for="text1" class="control-label">Message&nbsp;<span style="color:#F00">*</span></label>
            <div  class="input-group">
             <textarea name="msg" class="form-control form-control-sm" placeholder="Enter Contact Name" required /> </textarea>
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
