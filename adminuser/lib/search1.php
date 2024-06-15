<?php 
	// ---------------------------------------------------------------- // 

	// DATABASE CONNECTION PARAMETER 									// 

	// ---------------------------------------------------------------- // 

	// Modify config.php with your DB connection parameters or add them //

	// directly below insted of include('config.php'); 					//

	

	$connection=mysqli_connect("localhost","greendvc_user","NEWgreen@2019#") or die("Database Path not valid");
	//mysql_select_db('green_sherwani',$connection) or die ("Database not found");
	

	

	// ---------------------------------------------------------------- // 

	// SET PHP VAR - CHANGE THEM										// 

	// ---------------------------------------------------------------- // 

	// You can use these variables to define Query Search Parameters:	//

	

	// $SQL_FROM:	is the FROM clausule, you can add a TABLE or an 	//

	// 				expression: USER INNER JOIN DEPARTMENT...			//

	

	// $SQL_WHERE	is the WHER clausule, you can add an table 	 		//

	// 				attribute for ezample name or an 					//

	

	

	$SQL_FROM = 'booking';

	$SQL_WHERE = 'city';

	//$SQL_WHERE1 = 'book_code';



?>

<?php

	$searchq		=	strip_tags($_GET['q']);
	//$searchs		=	strip_tags($_GET['s']);

	$getRecord_sql	=	'SELECT DISTINCT(city) FROM '.$SQL_FROM.' WHERE '.$SQL_WHERE.' LIKE "%'.$searchq.'%"';

	$getRecord		=	mysqli_query($connection,$getRecord_sql);

	

	

	

	// ---------------------------------------------------------------- // 

	// AJAX Response													// 

	// ---------------------------------------------------------------- // 

	

	// Change php echo $row['name']; and $row['department']; with the	//

	// name of table attributes you want to return. For Example, if you //

	// want to return only the name, delete the following code			//

	// "<br /><?php echo $row['department'];></li>"//

	// You can modify the content of ID element how you prefer			//

	echo '<ul>';

	while ($row = mysqli_fetch_array($getRecord)) {?>

		<li onClick="document.getElementById('city').value='<?php echo $row['city']; ?>';document.getElementById('results').style.display='none'; "><a href="#"><?php echo $row['city']; ?> </a></li>

	<?php } 

	echo '</ul>';

	?>