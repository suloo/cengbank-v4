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
	
	require_once("C:/xampp/htdocs/proca/AdminManager.php");
	require_once("C:/xampp/htdocs/proca/UserManager.php");

	$errorMeesage = "";
	
	if(isset($_POST["ReceiverAccountNumber"])   && isset($_POST["Amount"])    ) {
		$ReceiverAccountNumber = trim($_POST["ReceiverAccountNumber"]);
		
		$Amount = trim($_POST["Amount"]);
		
		
		
		$errorMeesage = "";
		  							








		
		
		
		
		
		
		
		function testfun($name)
{
	$ReceiverAccountNumber = trim($_POST["ReceiverAccountNumber"]);
	$Amount = trim($_POST["Amount"]);
	
	
	
	
	
	
	
	//echo " ş ş ş ş ş ş ş ş ş $name ş ş ş ş şş ş ş  ş "; 
	
	
	
	
	echo "Your test function on button click is working";

	$check=UserManager::Checkusername($name);
	 if($check==false)
	{
	
		$result5=AdminManager::idofcompany($name);
$id=$result5[0]->getCompanyId();
		//echo "  ************************  $id  ******************";
 $result3=AdminManager::getaccountbalance($id);
 $balance=$result3[0]->getBal();
  //echo	"************************  $balance  ******************";
 if($balance > $Amount)
 {
	 echo "işlem yap";
	 $result1=AdminManager::changebalance($Amount,$balance,$id);
 $result0=AdminManager::getaccountnumber($id);
 $accnum=$result0[0]->getAccountNumber();
 //echo "   ////////////////$accnum//////////////////";
 $result7=AdminManager::sendinfotoflow($accnum,$ReceiverAccountNumber,$Amount,$result1,$id);
 }
 //amount receiver date, tr(validate),companyid
//header("location: accountopr.php");
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
							
							<th>SenderAccountNumber</th>
							<th>ReceiverAccountNumber</th>
							<th>Amount</th>
							<th>Validation</th>
							<th>DDate</th>
							
						</tr>
						
				</td>
						<?php 
						
						$result5=AdminManager::idofcompany($activeUser);
			$id=$result5[0]->getCompanyId();
							$userList = AdminManager::getflow($id);
							
							for($i = 0; $i < count($userList); $i++) {
							?>
							<tr>
							
								<th><?php echo  $userList[$i]->getSenderAccountNumber(); ?></th>
								<th><?php echo $userList[$i]->getReceiverAccountNumber(); ?></th>
								<th><?php echo $userList[$i]->getAmount(); ?></th>
								<th><?php echo $userList[$i]->getValidation(); ?></th>
								<th><?php echo $userList[$i]->getDDate(); ?></th>
								
							</tr>
							<?php
							}
						?>
							
					
			
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					</tbody>
				</table>
		
			
			</form>
		</div>
	</body> 
</html>