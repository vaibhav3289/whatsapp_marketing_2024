<?php

include"header.php";

$grow=mysqli_fetch_array(mysqli_query($link,"SELECT * FROM `groupwm` where g_id='$_GET[id]'"));


?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <strong>Edit Group Detail</strong>
          </div>
                  <div class="col-sm-6">
<?php /*?><font color="#FF0000"  >       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Only PNG Photo Allowed <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Size of Photo : 15kb ( 100 * 100 ) </font>
<?php */?>        
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
            <!-- jquery validation -->
            <div class="card card-primary">
              
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
                {
                    ?>
                    <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Error! </strong> <?php print $_SESSION['error']; ?></div>
                        <?php 
                    }
                    unset($_SESSION['success']);
                    unset($_SESSION['error']); ?>
                    <?php
                if(isset($_SESSION['err_token']) && $_SESSION['err_token']!="")
                {
                ?>
                          <div class="alert alert-danger">
                            <button class="close" data-dismiss="alert">&times;</button>
                            <strong>Error!</strong> <?php echo $_SESSION['err_token']; ?> </div>
                          <?php 
                }
                unset($_SESSION['err_token']); ?>
          
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="phpfiles/update_group_exe.php?id=<?php echo $_GET['id']; ?>" method="post" enctype='multipart/form-data'>
                <div class="card-body">
                <div class="row">
              <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Hospital</label>
                    <select class="form-control form-control-sm select2" id="u_id" name="u_id" onchange="getcli(this.value);" >
                    <option value>Select</option>
<?php
$qry=mysqli_query($link,"select * from user ");
while($qrow=mysqli_fetch_array($qry)){
	
?>
<option value="<?php echo $qrow['u_id']; ?>" <?php if($qrow['u_id']==$grow['u_id']){ echo "selected"; }?> ><?php echo $qrow['name']; ?></option>

<?php } ?>
</select>
                  
          </div>            
           <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Group Name</label>
            <div  class="input-group">
             <input  type="text" name="g_name" class="form-control form-control-sm" placeholder="Enter Whatsapp Group" autocomplete="off"required  value="<?php echo $grow['g_name'] ?>"/>
            </div>
          </div>
          

          <div class="form-group col-sm-3 col-xs-6">
                  <label for="exampleInputPassword1">&nbsp;</label>
                  <div>
                  <button type="submit" class="btn btn-sm btn-primary" >Update</button>
                  <button class="btn btn-sm btn-default" type="button"  onclick="window.location.href='<?php echo $path;?>group_detail.php'">Back </button>
               </div></div></div>
                <!-- /.card-body -->
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
include"footer.php";
?>