<?php  include 'phpfiles/connect.php'; ?>
 <label for="text1" class="control-label"> User</label>
                  <select class="form-control form-control-sm select2" id="u_id" name="u_id" >
                    <option value>Select</option>
<?php
$qry1=mysqli_query($link,"select * from user where u_id='".$_GET['id']."' ");
while($qrow1=mysqli_fetch_array($qry1)){
	
?>
<option value="<?php echo $qrow1['u_id']; ?>"><?php echo $qrow1['name']; ?></option>

<?php } ?>
</select>