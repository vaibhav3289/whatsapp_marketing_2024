<?php
include "header.php";

$query="select * from comapny where c_id=".$_SESSION['user'];
$result=mysqli_query($link,$query);
$row_list=mysqli_fetch_array($result);
?>
<script language="javascript" src="admin/datetimepicker_css.js"></script>
<div id="center" class="column">
<?php /*?>	  	<a href="#" class="banner"><img src="images/bigbanner.jpg" alt="" width="950px" height="200px"/></a><br />
<?php */?> 
 
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <div class="card">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 bg-primary" >
            <h4>Change Password </h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<form id="form1" name="form1" method="post" action="phpfiles/change_pin_exe.php">
  <table width="100%" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="3" align="center" style="color:#0000FF;"><?php echo $_SESSION['err_pin']; unset($_SESSION['err_pin']); ?></td>
    </tr>
    <tr>
      <td width="43%"><div align="right"><strong>Old  </strong></div></td>
      <td width="2%">&nbsp;</td>
      <td width="55%"><input name="old" type="password" id="old" required autocomplete="off" /></td>
    </tr>
    <tr>
      <td><div align="right"><strong>New  </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="new" type="password" id="new" required /></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Confirm  </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="confirm" type="password" id="confirm" required /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Change Password" /></td>
    </tr>
  </table>
</form>
			
		</div>
	  </div>
<?php
include "footer.php";
?>