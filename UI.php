<?php 
	require_once("C:/xampp/htdocs/proca/UserManager.php");

	$errorMeesage = "";
	
	if(isset($_POST["Name"]) && isset($_POST["Address"] ) && isset($_POST["Phone"])  && isset($_POST["EMail"])  && isset($_POST["Password"])  && isset($_POST["UserName"]) ) {
		$Name = trim($_POST["Name"]);
		$Address = trim($_POST["Address"]);
		$Phone = trim($_POST["Phone"]);
		$EMail = trim($_POST["EMail"]);
		$Password = trim($_POST["Password"]);
		$UserName = trim($_POST["UserName"]);
		
		
		$errorMeesage = "";
		  							


function testfun()
{
	$Name = ($_POST["Name"]);
	$Address = ($_POST["Address"]);
		$Phone = ($_POST["Phone"]);
		$EMail = ($_POST["EMail"]);
		$Password = ($_POST["Password"]);
		$UserName = ($_POST["UserName"]);
		
	echo "Your test function on button click is working";
	$check=UserManager::Check($Name);
	 if($check==true)
	{
  $result=UserManager::insertNewUser($Name, $Address, $Phone, $EMail, $Password, $UserName);
   $result1=UserManager::id($Name);
  $id=$result1[0]->getCompanyId();
  echo "  id burada   $id";
 
  $result1=UserManager::insertNewAccount($Name,$id);
header("location: UI.php");
	}
   else  
header("location: error2.php");
	
	
   
}




function testtfun()
{
	$Name = trim($_POST["Namee"]);
	
	echo "Your test function on button click is working";
	$check=UserManager::Check($Name);
	 if($check==false)
	{
 $result2=UserManager::DeleteUser($Name);
header("location: UI.php");
	}
   else  
header("location: error2.php");
	
	
   
}
		
		
		
		function testttfun()
{
	$Name = trim($_POST["Nameee"]);
	$Password = trim($_POST["passs"]);
	
	$check=UserManager::Check($Name);
	 if($check==false)
	{
 $result3=UserManager::UpdateUser($Name,$Password);
 
header("location: UI.php");
	}
   else  
header("location: error2.php");
	
	
   
}







function testtttfun()
{
	$Name = trim($_POST["Nameeee"]);

	echo "Your test function on button click is working";
	echo $Name;
	$check=UserManager::Check($Name);
	 if($check==false)
	{
 $result4=UserManager::SelectUser($Name);
   return $result4;
header("location: UI.php");
	}
   else  
header("location: error2.php");
	
   
 
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
							$userList = UserManager::getAllUsers();
							
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
							
							<td>
								<input type="text" name="Name"   />
							</td>
							<td>
								<input type="text" name="Address"  />
								</td>
								<td>
								<input type="number" name="Phone"  />
								</td>
								<td>
								<input type="text" name="EMail"  />
								</td>
								<td>
								<input type="text" name="Password"  />
								</td>
								
								<td>
								<input type="text" name="UserName"  />
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
						<input type="text" name="Namee"  />
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
			<table id="selectt">
					<tbody>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Phone </th>
							<th>EMail </th>
							<th>CompanyId </th>
							<th>Password </th>
							<th>UserName</th>
							<th>CreditId </th>
						</tr>
						
						<tr>
						<td></td>
						<td>
						<input type="text" name="Nameeee"  />
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
							
								<td><?php echo  $userList[$i]->getName(); ?></td>
								<td><?php echo $userList[$i]->getAddress(); ?></td>
								<td><?php echo $userList[$i]->getPhone(); ?></td>
								<td><?php echo $userList[$i]->getEMail(); ?></td>
								<td><?php echo $userList[$i]->getCompanyId(); ?></td>
								<td><?php echo $userList[$i]->getPassword(); ?></td>
								<td><?php echo $userList[$i]->getUserName(); ?></td>
								<td><?php echo $userList[$i]->getCreditId(); ?></td>
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