<?php 
	require_once("C:/xampp/htdocs/proca/AdminManager.php");

	$errorMeesage = "";
	
	if(isset($_POST["CompanyId"])  ) {
		$CompanyId = trim($_POST["CompanyId"]);
		$CreditAmount = trim($_POST["CreditAmount"]);
		$PaymentDueDate = trim($_POST["PaymentDueDate"]);
		
		$errorMeesage = "";		



									
	function testfun()
{
		$CompanyId = trim($_POST["CompanyId"]);
		$CreditAmount = trim($_POST["CreditAmount"]);
		$PaymentDueDate = trim($_POST["PaymentDueDate"]);
		
	echo "Your test function on button click is working";
	$check=AdminManager::CheckCredits($CompanyId);

   

   if($check==true)
	{
  $result=AdminManager::insertNewCredit($CompanyId, $CreditAmount,$PaymentDueDate );
header("location: credit.php");
	}
	else  
    header("location: error4.php");
	  
	  
	  
	 
    
 
     
   }
   

   
   
    
   function testtfun()
{
	
	
	
	$CompanyId = trim($_POST["CompanyIdd"]);
	
	echo "Your test function on button click is working";
	
	$check=AdminManager::CheckCredits($CompanyId);
	
	if($check==false)
	{
   $result2=AdminManager::DeleteCredit($CompanyId);
header("location: credit.php");
	}
	else  
    header("location: error4.php");
}
		
		
		
		
		
		
		function testttfun()
{
	$CompanyId = trim($_POST["CompanyIddd"]);
		$PaymentDueDate = trim($_POST["PaymentDueDatee"]);
	echo "Your test function on button click is working";
	
	 $check=AdminManager::CheckCredits($CompanyId);
	 if($check==false)
	{
  $result3=AdminManager::UpdateCredit($CompanyId,$PaymentDueDate);
header("location: credit.php");
	}
   else  
header("location: error4.php");
   
   
   }

   
   
   
   
function testtttfun()
{
	$CompanyId = trim($_POST["CompanyIdddd"]);

	echo "Your test function on button click is working";
	

 
 $check=AdminManager::CheckCredits($CompanyId);
	 if($check==false)
	{
  $result4=AdminManager::SelectCredit($CompanyId);
  
 return $result4;
header("location: credit.php");
	}
   else  
header("location: error4.php");

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
							<th>CreditId</th>
							<th>CompanyCreditPoint</th>
							<th>CreditAmount </th>
							<th>PaymentDueDate</th>
							<th>CompanyId </th>
						
						</tr>
						<?php 
							$userList = AdminManager::getAllCredits();
							
							for($i = 0; $i < count($userList); $i++) {
							?>
							<tr>
							
								<td><?php echo  $userList[$i]->getCreditId(); ?></td>
								<td><?php echo $userList[$i]->getCompanyCreditPoint(); ?></td>
								<td><?php echo $userList[$i]->getCreditAmount(); ?></td>
								<td><?php echo $userList[$i]->getPaymentDueDate(); ?></td>
								<td><?php echo $userList[$i]->getCompanyId(); ?></td>
							
								
							</tr>
							<?php
							}
						?>
						<tr>
							
							<td>
								<input type="text" name="CompanyId"   />
							</td>
							<td>
								<input type="text" name="CreditAmount"  />
								</td>
								
								
								<td>
								<input type="text" name="PaymentDueDate"  />
								</td>
								
								
								
								<td>
								<input type="submit" name="save" value="Save!"  />
								</td>
								
	
								<?php 
									
								if(isset($_POST['save']))
								{
   testfun();
   
}

								
								?>
							
						</tr>
						<tr>
						<td></td>
						
						<td>
						<input type="text" name="CompanyIdd"/>
						</td>
						
						<td>
						<input type="submit" name="delete" value="delete!!"/>
						</td>
						
						
	
						<?php 
														if(isset($_POST['delete']))
									{
									echo "jflksefjesklfjselklfjes";
									testtfun();
									}

	
								?>
					</tr>
						<tr>
						<td>
						<input type="text" name="CompanyIddd"  />
						</td>
						<td>
						<input type="text" name="PaymentDueDatee"  />
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
							<th>CreditId</th>
							<th>CompanyCreditPoint</th>
							<th>CreditAmount </th>
							<th>PaymentDueDate</th>
							<th>CompanyId </th>
					
						</tr>
						
						<tr>
						<td></td>
						<td>
						<input type="text" name="CompanyIdddd"  />
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
							
									<td><?php echo  $userList[$i]->getCreditId(); ?></td>
								<td><?php echo $userList[$i]->getCompanyCreditPoint(); ?></td>
								<td><?php echo $userList[$i]->getCreditAmount(); ?></td>
								<td><?php echo $userList[$i]->getPaymentDueDate(); ?></td>
								<td><?php echo $userList[$i]->getCompanyId(); ?></td>
								
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