<?php
	session_start();
	$activeUser = null;
	
	if(isset($_SESSION['activeUser'])) {
		$activeUser =  $_SESSION['activeUser'];
	
	echo $tarih = date("Y : m : d");
	echo "$activeUser";
	}
?> 
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
	
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Session</title>
	</head>
	<body> 
	<form method="POST" action="<?php $_PHP_SELF ?>">
		<div id="k">
								<td>
								<input type="submit" class="admin"name="Profile" value="Profile"  />
								</td>
								
								<td>
								<input type="submit" class="user"name="AccountOpr" value="AccountOpr"  />
								</td>
								<td>
								<input type="submit" class="admin"name="AccountFlow" value="AccountFlow"  />
								</td>
								<td>
								<input type="submit" class="admin"name="Exit" value="Exit"  />
								</td>
								
								
			<?php 
			if(isset($_POST['AccountOpr']))
								{
									session_start();
   header("location: accountopr.php");
				}
				if(isset($_POST['Profile']))
								{
								session_start();	
			
   header("location: profile.php");
				}
					if(isset($_POST['AccountFlow']))
								{
									session_start();
   header("location: Accountflow.php");
				}
				if(isset($_POST['Exit']))
								{
									
   header("location: cengbank.php");
				}
				
				
			
			
				if(isset($activeUser)) {
					echo('<br>');
					echo "Welcome " . $activeUser;
				}
				else {
					echo "<a href='indexx.php'>Giriş yapınız!</a>";
				}
			?>
		</div>
		</form>
	</body>
</html>