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
		
	
	$check=UserManager::Check($Name);
	 if($check==true)
	{
		
	
  $result=UserManager::insertNewUser($Name, $Address, $Phone, $EMail, $Password, $UserName);
  echo "$Name";
  $result1=UserManager::id($Name);
  $id=$result1[0]->getCompanyId();
  echo "  id burada   $id";
  $result1=UserManager::insertNewAccount($Name,$id);

  

  
header("location: UserRegister.php");

	}
   else  
header("location: UserRegister.php?error=1");
	
	
   
}





		
		
		








		
		//if(!$result) {
			//$errorMeesage = "Yeni kullanıcı kaydı başarısız!";
		//}
		
	}

	
	
	
	
?>







<?php 
									if(isset($_GET['error'])==true) 
									{
										echo " 
<script type='text/javascript'>  
alert('THERE IS AN ERROR , PLEASE TRY AGAIN!.'); 
</script> 
";
									}
								else 
									echo " 
<script type='text/javascript'>  
alert('SUCCESS!!.'); 
</script> 
";
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
							
							<th>Password </th>
							<th>UserName</th>
							
						</tr>
						
							
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
								<td>
								<input type="submit" name="BACK" value="BACK!"  />
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
							
							<?php 
									
								if(isset($_POST['BACK']))
								{
  header("location: userlogin.php");
}
								
								?>
							
							
						</tr>
						
						</tr>
						</tbody>
						</table>
			
			</form>
		</div>
	</body> 
</html>