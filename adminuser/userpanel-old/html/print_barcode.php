<?php
session_start();
include "../phpfiles/connect.php";

list($name,$address,$contact)=mysqli_fetch_array(mysqli_query($link,"SELECT name,address,contact FROM `profile` WHERE id='1'"));

define('IN_CB', true);
include('header.php');

$product=$_POST['product'];
$no=$_POST['code'];

$vals = array();
for($i = 0; $i <= 127; $i++) {
	$vals[] = '%' . sprintf('%02X', $i);
}
$keys = array(
	'NUL', 'SOH', 'STX', 'ETX', 'EOT', 'ENQ', 'ACK', 'BEL', 'BS', 'TAB', 'LF', 'VT', 'FF', 'CR', 'SO', 'SI', 'DLE', 'DC1', 'DC2', 'DC3', 'DC4', 'NAK', 'SYN', 'ETB', 'CAN', 'EM', 'SUB', 'ESC', 'FS', 'GS', 'RS', 'US',
	'&nbsp;', '!', '"', '#', '$', '%', '&', '\'', '(', ')', '*', '+', ',', '-', '.', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ':', ';', '<', '=', '>', '?',
	'@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[', '\\', ']', '^', '_',
	'`', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '{', '|', '}', '~', 'DEL'
);
if($a2 === '') {
	$a2 = 'NULL';
}
$n = $table->numRows();
$table->insertRows($n, 4);
$table->addRowAttribute($n, 'class', 'table_title');
$table->addCellAttribute($n, 0, 'align', 'center');
$table->addCellAttribute($n, 0, 'colspan', '2');
$table->setText($n, 0, '<font color="#ffffff"><b>Specifics Configs</b></font>');
$table->setText($n + 1, 0, 'Starts With');
$text2display = '<select size="1" name="a2"><option value="NULL"';
if($a2=='NULL') {
	$text2display .= ' selected="selected"';
}
$text2display .= '>Auto</option><option value="A"';
if($a2 === 'A') {
	$text2display .= ' selected="selected"';
}
$text2display .= '>Code 128-A</option><option value="B"';
if($a2 === 'B') {
	$text2display .= ' selected="selected"';
}
$text2display .= '>Code 128-B</option><option value="C"';
if($a2 === 'C') {
	$text2display .= ' selected="selected"';
}
$text2display .= '>Code 128-C</option></select>';
$table->setText($n + 1, 1, $text2display);
$table->setText($n + 2, 0, 'Keys');
$text2display = '';
$c = count($keys);

$productid=implode(',', $product);

$sql="select pname,code,mrp from product where p_id='$productid'";
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);

?>
<table width="100%" cellpadding="10" cellspacing="10">
	<?php
	for($i=0;$i<$no;$i++) {
		if($i%4==0) {
			?>
			<tr> 
			<?php } ?>

			<td align="center"><strong>MRP : <?php echo $row['mrp']; ?> /-</strong><br /><img alt="Barcode Image" src="image.php?code=code128&o=1&dpi=72&t=50&r=1&rot=0&text=<?php echo $row['code']; ?>&f1=Arial.ttf&f2=8&a1=&a2=NULL&a3="><br /><?php echo $row['pname']; ?><br /><?php echo $name; ?></td>
			<?php if($i==0 && $i==4) { ?>
			</tr>
		<?php } 
	} ?>
</table>
<script>
	window.print();
</script>