<!DOCTYPE html>
<html> 

	<head>
   <style>
	  #header-content {
    position: absolute;
    bottom: 0;
    right: 0;
  }
    #k {
    position: absolute;
    top: 0;
    right: 0;
  }
  .admin,.user
  {
	  width:100px ;
	  height: 50px;
  }
   .ata
  {
	position: absolute;
    bottom: 200px;
    left:500px;  
	 width:300px ;
	  height: 300px;
  }

     </style>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>CENG BANK</title>

	</head>
	<body bgcolor="orange">
	<img src="res.png" width="130" height="130">
	<img src="ata.jpg" class="ata"  width="130" height="130">
	<form method="POST" action="<?php $_PHP_SELF ?>">
	
		<div id="header-content">
		
		<script type="text/javascript" src="http://finanswebde.com/fwebdev2/js/fwidget.js">
		
		</script>
		<div  id="fwebdecurrency" class="aside" style="position:static  right: 200px; top: 100px">
		<a title="Güncel Dolar ve Altın Yorumları - Fiyatları" href="//finanswebde.com/">
		<img style="width:60px" src="http:///finanswebde.com/fwebdev2/images/logo.svg">
		</a>
		</div>
		<script type="text/javascript">_fcepte.createWidget("/eklenti/currency?codes=USD,EUR,GBP,",120,250);
		</script>
		</div>
	</body>
</html>
	<!DOCTYPE html>



<html> 

	<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP :: 3 Tier Architecture</title>
	
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
 header("location: credit.php");
}

									
								?>
								
								
			