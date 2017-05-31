<?php
session_start();
	$activeUser = null;
	
	if(isset($_SESSION['activeUser'])) {
		$activeUser =  $_SESSION['activeUser'];
	
	
	}
	echo $tarih = date("Y : m : d");
	echo "$activeUser";
?> 


<?php 
	require_once("C:/xampp/htdocs/proca/UserManager.php");

	$errorMeesage = "";
	
	if(isset($_POST["Nameee"])   && isset($_POST["passs"])  ) {
		$Name = trim($_POST["Nameee"]);
		
		$Password = trim($_POST["passs"]);
		
		
		
		$errorMeesage = "";
		  							








		
		
		
		function testttfun()
{
	$Name = trim($_POST["Nameee"]);
	$Password = trim($_POST["passs"]);
	echo "Your test function on button click is working";
	$check=UserManager::Checkusername($Name);
	 if($check==false)
	{
 $result3=UserManager::UpdateUsername($Name,$Password);
header("location: profile.php");
	}
   else  
header("location: proferror.php");
	
	
   
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
    bottom: -100px;
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
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP :: 3 Tier Architecture</title>
		
	</head>
	<body> 
		<div id="dvMain">
			<form method="POST" action="<?php $_PHP_SELF ?>">
				<table id="tblUsers">
					<tbody>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Phone </th>
							<th>EMail </th>
							<th>CompanyId </th>
							<th>Password </th>
							<th>UserName</th>
							
						</tr>
						<?php 
							$userList = UserManager::getuser($activeUser);
							
							for($i = 0; $i < count($userList); $i++) {
							?>
							<tr>
							
								<th><?php echo  $userList[$i]->getName(); ?></th>
								<th><?php echo $userList[$i]->getAddress(); ?></th>
								<th><?php echo $userList[$i]->getPhone(); ?></th>
								<th><?php echo $userList[$i]->getEMail(); ?></th>
								<th><?php echo $userList[$i]->getCompanyId(); ?></th>
								<th><?php echo $userList[$i]->getPassword(); ?></th>
								<th><?php echo $userList[$i]->getUserName(); ?></th>
								<th><?php echo $userList[$i]->getCreditId(); ?></th>
							</tr>
							<?php
							}
						?>
					
							
					
			
						<tr>
						<td></td>
						<td>
						<input type="text" name="Nameee"  />
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
		
			
			</form>
		</div>
	</body> 
</html>