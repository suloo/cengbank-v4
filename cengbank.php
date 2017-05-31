
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
		<div id="k">
		
							
								<input type="submit" class="admin" name="admin" value="admin"   />
								
								
								
								<input type="submit" class="user" name="user" value="user"  />
								
								
			<?php 
			if(isset($_POST['user']))
								{
							
   header("location: userlogin.php");
				}
				if(isset($_POST['admin']))
								{
									
   header("location: indexx.php");
				}
			
			
			
			?>
			
			
		</div>
		</form>
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