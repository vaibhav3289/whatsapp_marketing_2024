<?php 
	// ---------------------------------------------------------------- // 
	// DATABASE CONNECTION PARAMETER 									// 
	// ---------------------------------------------------------------- // 
	// Modify config.php with your DB connection parameters or add them //
	// directly below insted of include('config.php'); 					//
	
	include('config.php'); 
	
	
	// ---------------------------------------------------------------- // 
	// SET PHP VAR - CHANGE THEM										// 
	// ---------------------------------------------------------------- // 
	// You can use these variables to define Query Search Parameters:	//
	
	// $SQL_FROM:	is the FROM clausule, you can add a TABLE or an 	//
	// 				expression: USER INNER JOIN DEPARTMENT...			//
	
	// $SQL_WHERE	is the WHER clausule, you can add an table 	 		//
	// 				attribute for ezample name or an 					//
	
	
	$SQL_FROM = 'book_master';
	$SQL_WHERE = 'book_name';
	$SQL_WHERE1 = 'book_code';

?>
<?php
	$searchq		=	strip_tags($_GET['q']);
	$getRecord_sql	=	'SELECT * FROM '.$SQL_FROM.' WHERE ('.$SQL_WHERE.' LIKE "'.$searchq.'%"'.'or '.$SQL_WHERE1 .' LIKE "'.$searchq.'%") ';
	$getRecord		=	mysql_query($getRecord_sql);
	if(strlen($searchq)>0){
	
	
	// ---------------------------------------------------------------- // 
	// AJAX Response													// 
	// ---------------------------------------------------------------- // 
	
	// Change php echo $row['name']; and $row['department']; with the	//
	// name of table attributes you want to return. For Example, if you //
	// want to return only the name, delete the following code			//
	// "<br /><?php echo $row['department'];></li>"//
	// You can modify the content of ID element how you prefer			//
	echo '<ul>';
	while ($row = mysql_fetch_array($getRecord)) {?>
		<li onClick="document.getElementById('name').value='<?php echo $row['book_name']; ?>';document.getElementById('results').style.display='none'; getunitselect1('<?php echo $row['book_name'] ; ?>','')"><a href="#"><?php echo $row['book_code']."-".$row['book_name']; ?> </a></li>
	<?php } 
	echo '</ul>';
	?>
<?php } ?>