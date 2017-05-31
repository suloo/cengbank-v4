<?php 
	require_once("C:/xampp/htdocs/proca/AdminManager.php");

	$errorMeesage = "";
	
	if(isset($_POST["AdminName"]) && isset($_POST["AdminPassword"] )) {
		$AdminName = trim($_POST["AdminName"]);
		$AdminPassword = trim($_POST["AdminPassword"]);
		
		
		$errorMeesage = "";
		  							



									
									function testfun()
{
		$AdminName = trim($_POST["AdminName"]);
		$AdminPassword = trim($_POST["AdminPassword"]);
		
	echo "Your test function on button click is working";
	
	$check=AdminManager::CheckUsers($AdminName);
	if($check==true)
	{
   $result=AdminManager::insertNewAdmin($AdminName, $AdminPassword );
header("location: AI.php");
	}
   
	  
	  
	  
	 
    
   else 
   {
	   header("location: error.php");
   }
     
   }
  
   

   
   
   function testtfun()
{
	$AdminName = trim($_POST["AdminNamee"]);
	
	echo "Your test function on button click is working";
	
	$check=AdminManager::CheckUsers($AdminName);
	
	if($check==false)
	{
   $result2=AdminManager::DeleteAdmin($AdminName);
header("location: AI.php");
	}
	else  
    header("location: error.php");
}
		
		
		
		
		
		
		function testttfun()
{
	$AdminName = trim($_POST["AdminNameee"]);
		$AdminPassword = trim($_POST["passs"]);
	echo "Your test function on button click is working";
	
	 $check=AdminManager::CheckUsers($AdminName);
	 if($check==false)
	{
  $result3=AdminManager::UpdateAdmin($AdminName,$AdminPassword);
header("location: AI.php");
	}
   else  
header("location: error.php");
   
   
   }

   
   
   
   
function testtttfun()
{
	$AdminName = trim($_POST["AdminNameeee"]);

	echo "Your test function on button click is working";
	 $check=AdminManager::CheckUsers($AdminName);
	 if($check==false)
	{
  $result4=AdminManager::SelectAdmin($AdminName);
 return $result4;
 header("location: AI.php");
	}
   else  
	   
  
header("location: error.php");
   }
		
		//if(!$result) {
			//$errorMeesage = "Yeni kullanıcı kaydı başarısız!";
		//}
		
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

     </style>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>CENG BANK</title>

	</head>
	<body bgcolor="orange">
	<img src="res.png" width="130" height="130">
	
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
		<div align="center">
			<form method="POST" action=""  <?php $_PHP_SELF ?>">   
				<table id="tblUsers">
					<tbody>
						<tr>
							<th>AdminId</th>
							<th>AdminName</th>
							<th>AdminPassword </th>
						
						</tr>
						<?php 
							$userList = AdminManager::getAllUsers();
							
							for($i = 0; $i < count($userList); $i++) {
							?>
							<tr>
							
								<td><?php echo  $userList[$i]->getAdminId(); ?></td>
								<td><?php echo $userList[$i]->getAdminName(); ?></td>
								<td><?php echo $userList[$i]->getAdminPassword(); ?></td>
							
								
							</tr>
							<?php
							}
						?>
						<tr>
							
							<td>
								<input type="text" name="AdminName"   />
							</td>
							<td>
								<input type="text" name="AdminPassword"  />
								</td>
								
								<td>
								<input type="submit" name="save" value="Save!"  />
								</td>
								
	
								<?php 
									
								if(isset($_POST['save']))
								{
   testfun();
   
}

									if(isset($errorMeesage)) {
										echo "<br>" . "<span style='color: red;'>" . $errorMeesage . "</span>";
									}
								?>
							
						</tr>
						<tr>
						<td></td>
						<td>
						<input type="text" name="AdminNamee"  />
						</td>
						<td>
						<input type="submit" name="delete" value="delete!!" />
						</td>
						
						
	
						<?php 
														if(isset($_POST['delete']))
								{
   testtfun();
}

									if(isset($errorMeesage)) {

										echo "<br>" . "<span style='color: red;'>" . $errorMeesage . "</span>";
									}
								?>
						</tr>
						<tr>
						<td>
						<input type="text" name="AdminNameee"  />
						</td>
						<td>
						<input type="text" name="passs"  />
						</td>
						<td>
						<input type="submit" name="update" value="update" />
						</td>
						
						
	
						<?php 
														if(isset($_POST['update']))
								{
   testttfun();
}

									if(isset($errorMeesage)) {

										echo "<br>" . "<span style='color: red;'>" . $errorMeesage . "</span>";
									}
								?>
						</tr>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					</tbody>
				</table>
			<table id="selectt">
					<tbody>
						<tr>
							<th>AdminId</th>
							<th>AdminName</th>
							<th>AdminPassword </th>
							
					
						</tr>
						
						<tr>
						<td></td>
						<td>
						<input type="text" name="AdminNameeee"  />
						</td>
						
						<td>
						<input type="submit" name="select" value="select" />
						</td>
						
						
	
						<?php 
														if(isset($_POST['select']))
								{
  
							$userList =   testtttfun();
							
							for($i = 0; $i < count($userList); $i++) {
								?>
							
							<tr>
							
								<td><?php echo  $userList[$i]->getAdminId(); ?></td>
								<td><?php echo $userList[$i]->getAdminName(); ?></td>
								<td><?php echo $userList[$i]->getAdminPassword(); ?></td>
								
							</tr>
							<?php
							}
								}
							?>

							
							
						</tr>
						</tbody>
						
						</table>
			
			</form>
			
		</div>
		
	</body> 
	
</html>
