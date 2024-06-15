<?php
include"header.php"; 
session_start();
?>
<script>
function checkvali()
{
  var flag=0;
  document.getElementById('err_old').innerHTML="";
  document.getElementById('err_new').innerHTML="";
  document.getElementById('err_confirm').innerHTML="";
  if(document.getElementById('old').value=="")
  {
    document.getElementById('err_old').innerHTML="Please Enter Old Password.";
    flag=1;
  }
  if(document.getElementById('new').value=="")
  {
    document.getElementById('err_new').innerHTML="Please Enter New Password.";
    flag=1;
  }
  if(document.getElementById('confirm').value=="")
  {
    document.getElementById('err_confirm').innerHTML="Please Enter Confirm Password.";
    flag=1;
  }
  else if(document.getElementById('new').value!=document.getElementById('confirm').value)
  {
    document.getElementById('err_confirm').innerHTML="New Password and Confirm Password Does't Match.";
    flag=1;
  }
  
  if(flag==1)
    return false;
  else
    return true;
}   
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         <div class="col-sm-6 col-xs-3">
            <strong>Change Password </strong>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card ">
              <!--<div class="card-header">
                <h3 class="card-title">Add category</h3>
              </div>-->
              <!-- /.card-header -->

               <?php
               if(isset($_SESSION['success']) && $_SESSION['success']!="")
{
?>
                          <div class="alert alert-success">
                  <strong>Success! </strong> 
                    
                  <?php print $_SESSION['success']; ?></div>
                          <?php
}
if(isset($_SESSION['error']) && $_SESSION['error']!="")
{
?>
                        <div class="alert alert-danger">
                    
                    
                  <strong>Error! </strong> <?php print $_SESSION['error']; ?></div>
                   <?php 
}
unset($_SESSION['success']);
unset($_SESSION['error']); ?>
              


              <!-- form start -->
              <form name="form1" method="post" action="<?php echo $path; ?>phpfiles/change_password.php" onSubmit="return checkvali()">
             
                <div class="card-body">

                  <div class="form-group col-md-3">

                    <label for="exampleInputEmail1">Old Password</label>

                    <input name="old" type="text" id="old"class="form-control form-control-sm">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputPassword1">New Password</label>
                   <input name="new" type="text" class="form-control form-control-sm" id="new">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputPassword1">Confirm Password</label>
                   <input name="confirm" type="text" class="form-control form-control-sm" id="confirm">
                  </div>
                <!-- /.card-body -->
                <div class="form-group col-md-3">
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>&nbsp;&nbsp;<button class="btn  btn-default btn-sm" type="button" tabindex="18" onclick="window.location.href='main.php'">Back</button>
                </div></div>
              </form>
    </section>
    <!-- /.content -->
  </div>


<?php
include"footer.php"; ?>




