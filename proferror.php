
	<!DOCTYPE html>



<html> 

	<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP :: 3 Tier Architecture</title>
		<link rel="stylesheet" type="text/css" href="site.css">
	</head>
	<body> 

		<div id="dvMain">
		
			<form method="POST" action=""  <?php $_PHP_SELF ?>">   
			<table id="tblUsers">
			<?php
	
	
	 echo "YOU'VE ENTERED WRONG ENTRY. PLEASE CLICK THE BUTTON 'GO BACK' AND TRY AGAIN!"; 
	 
	
	
	?> 
			
			<td><input type="submit" name="err" value="GO BACK" /> </td>
									<?php 
									
								if(isset($_POST['err']))
								{
 header("location: profile.php");
}

									
								?>
			