<?php 
	require_once("C:/xampp/htdocs/proca/DB.php");
	require_once("C:/xampp/htdocs/proca/Admin.php");

	
	class AdminManager {
		
		
		public static function idofcompany($Name)
			{
				
				$db = new DB();
				$result = $db->getDataTable("select  CompanyId from company WHERE UserName='$Name'");
			$allUsers = array();
			while($row = $result->fetch_assoc()) {
			//echo	"alohaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
				$userObj = new cc($row["CompanyId"] );
			array_push($allUsers, $userObj);
			}
		
		
		
		//$userObj = new cc($row["CompanyId"] );
			//array_push($allUsers,"1938");
		//	echo ">>>>>>>>>>>>>>>>>> $Name>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>             " ;
			//echo "$allUsers[0]";
			
			return $allUsers;
			
			
		
			}		
		
		
			
		public static function getaccountnumber($id)
			{
				$db = new DB();
				$result = $db->getDataTable("select  AccountNumber from account  WHERE CompanyId='$id'");
			//$result = $db->getDataTable("select  Name from company  WHERE CompanyId='$id'");
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				//echo	"ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ";
				$userObj = new accountnumber($row["AccountNumber"]);
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
			
			
			
			}
		
		
		
		
		public static function getaccountbalance($id)
			{
				$db = new DB();
				$result = $db->getDataTable("select  AccountBalance from account  WHERE CompanyId='$id'");
			//$result = $db->getDataTable("select  Name from company  WHERE CompanyId='$id'");
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				//echo	"ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ";
				$userObj = new b($row["AccountBalance"]);
				array_push($allUsers, $userObj);
			}
			
			
			
			$s=$allUsers[0]->getBal();
			//echo "  +++++++++++++++    $s  ++++++++++++++++++   ";
			
			return $allUsers;
			
			
		
			}
			
			public static function checkreceiveraccount($ReceiverAccountNumber)
			{
				$db = new DB();
				$result = $db->getDataTable("select  CompanyId from account WHERE AccountNumber='$ReceiverAccountNumber'");
			$allUsers = array();
			$tr=false;
			while($row = $result->fetch_assoc()) {
				$tr=true;
				
			echo	"alohaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
				$userObj = new cc($row["CompanyId"] );
			array_push($allUsers, $userObj);
			
			
			
			}
			
				return $tr;
			}
				
				public static function changebalance($Amount,$balance,$id)
			{
				$db = new DB();
				$newbalance=$balance-$Amount;
				//echo " *** *  $Amount****** $balance******  *****$id*****";
				//echo "&&&&&&$newbalance &&&&&&&";
				$result = $db->getDataTable("UPDATE account SET AccountBalance='$newbalance' WHERE CompanyId='$id'");
			
			$tr=true;
			return $tr;
			
		
			}
		
				public static function changebalance2($Amount,$balance,$ReceiverAccountNumber)
			{
				$db = new DB();
				$newbalance=$balance+$Amount;
				//echo " *** *  $Amount****** $balance******  *****$id*****";
				echo "&&&&&&$newbalance &&&&&&&";
				$result = $db->getDataTable("UPDATE account SET AccountBalance='$newbalance' WHERE AccountNumber='$ReceiverAccountNumber'");
			$tr=true;
			return $tr;
			
		
			
		
			}	
			public static function getaccountbalance2($ReceiverAccountNumber)
			{
				$db = new DB();
				$result = $db->getDataTable("select  AccountBalance from account  WHERE AccountNumber='$ReceiverAccountNumber'");
			//$result = $db->getDataTable("select  Name from company  WHERE CompanyId='$id'");
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				//echo	"ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ";
				$userObj = new b($row["AccountBalance"]);
				array_push($allUsers, $userObj);
			}
			
			
				$s=$allUsers[0]->getBal();
			//echo "  +++++++++++++++    $s  ++++++++++++++++++   ";
			
			return $allUsers;
			
			
			}
			
			
			
			
			
			
			public static function sendinfotoflow($SenderAccountNumber,$ReceiverAccountNumber,$Amount,$Validation,$id)
			{
				$db = new DB();
		$tarih = date("Y : m : d");
				
				$result = $db->getDataTable("INSERT INTO accountflow(SenderAccountNumber,ReceiverAccountNumber, Amount,Validation,DDate,CompanyId) VALUES ('$SenderAccountNumber', '$ReceiverAccountNumber', '$Amount','$Validation','$tarih','$id')");
			
			$tr=true;
			return $tr;
			
		
			}
		public static function sendinfotoflow2($SenderAccountNumber,$ReceiverAccountNumber,$Amount)
			{
				$db = new DB();
		$tarih = date("Y : m : d");
				
				$result = $db->getDataTable("INSERT INTO accountflow(SenderAccountNumber,ReceiverAccountNumber, Amount,DDate) VALUES ('$SenderAccountNumber', '$ReceiverAccountNumber', '$Amount','$tarih') where AccountNumber='$ReceiverAccountNumber'");
			
			$tr=true;
			return $tr;
			
		
			}
			
			
		
		//public static function checkbalancecontrol ($Amount) {
			//$db = new DB();
		//$result = $db->getDataTable("select  AccountBalance  from account ");
		
	//	}
		
		
			public static function getflow ($id) {
			$db = new DB();
			$result = $db->getDataTable("select  SenderAccountNumber,ReceiverAccountNumber, Amount,Validation,DDate from accountflow where CompanyId='$id'  order by DDate");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new accountflow( $row["SenderAccountNumber"] , $row["ReceiverAccountNumber"] ,$row["Amount"],$row["Validation"],$row["DDate"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		}
		
		
		
		
		
		
		
		public static function getAllUsers () {
			$db = new DB();
			$result = $db->getDataTable("select  AdminId,AdminName, AdminPassword from admin order by AdminName");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new Admin( $row["AdminId"] , $row["AdminName"] ,$row["AdminPassword"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		}
		
		public static function CheckUsers($AdminName){
			$db = new DB();
			$result = $db->getDataTable("select  AdminName from admin order by AdminName");
			$bool=true;
			
			while($row = $result->fetch_assoc()) {
				if($row["AdminName"]==$AdminName )
				{
					$bool=false;
				}
				
			}
		return $bool;
		
		
		}
		
		
		
		public static function insertNewAdmin($AdminName, $AdminPassword) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO admin(AdminId,AdminName, AdminPassword) VALUES (NULL, '$AdminName', '$AdminPassword')");
			return $success;
		}
			public static function DeleteAdmin($AdminName) {
			$db = new DB();
			$success = $db->executeQuery("DELETE FROM admin WHERE AdminName='$AdminName'");
			return $success;
		}
			public static function UpdateAdmin($AdminName,$AdminPassword) {
			$db = new DB();
			$success = $db->executeQuery("UPDATE admin SET AdminPassword='$AdminPassword' WHERE AdminName='$AdminName'");
			return $success;
			}
			
			
			public static function SelectAdmin($AdminName) {
			$db = new DB();
			$result = $db->getDataTable("select   AdminId, AdminName, AdminPassword from admin WHERE AdminName='$AdminName'");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new Admin( $row["AdminId"] , $row["AdminName"] ,$row["AdminPassword"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
			
			
			
			
			}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public static function insertNewCreditCard($CompanyId, $ExpirationDate) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO creditcard(CompanyId,ExpirationDate ) VALUES ('$CompanyId', '$ExpirationDate')");
			return $success;
		}
			public static function getAllCreditCards () {
			$db = new DB();
			$result = $db->getDataTable("select  CreditCardId,CompanyId, ExpirationDate from creditcard order by CreditCardId");
			
			$allCreditCards = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new CreditCard( $row["CreditCardId"] , $row["CompanyId"] ,$row["ExpirationDate"] );
				array_push($allCreditCards, $userObj);
			}
			
			return $allCreditCards;
		}
	
	
	public static function CheckCreditCards($CompanyId){
			$db = new DB();
			$result = $db->getDataTable("select  CompanyId from creditcard order by CompanyId");
			$bool=true;
			
			while($row = $result->fetch_assoc()) {
				if($row["CompanyId"]==$CompanyId )
				{
					$bool=false;
				}
				
			}
		return $bool;
		
		
		}
	
	
	public static function DeleteCreditCard($CompanyId) {
			$db = new DB();
			$success = $db->executeQuery("DELETE FROM creditcard WHERE CompanyId='$CompanyId'");
			return $success;
		}
	
	public static function UpdateCreditCard($CompanyId,$ExpirationDate) {
			$db = new DB();
			$success = $db->executeQuery("UPDATE creditcard SET ExpirationDate='$ExpirationDate' WHERE CompanyId='$CompanyId'");
			return $success;
			}
	
	
		public static function SelectCreditCard($CompanyId) {
			$db = new DB();
			$result = $db->getDataTable("select   CreditCardId, CompanyId, ExpirationDate from creditcard WHERE CompanyId='$CompanyId'");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new CreditCard( $row["CreditCardId"] , $row["CompanyId"] ,$row["ExpirationDate"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
			
			
			
			
			}
	
	
	
	
	public static function insertNewCredit($CompanyId,$CreditAmount, $PaymentDueDate) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO credit(CompanyId,CompanyCreditPoint,CreditAmount,PaymentDueDate ) VALUES ('$CompanyId', 100 ,'$CreditAmount', '$PaymentDueDate')");
			return $success;
		}
			
			
			
			public static function getAllCredits () {
			$db = new DB();
			$result = $db->getDataTable("select  CreditId,CompanyCreditPoint,CreditAmount,PaymentDueDate, CompanyId from credit order by CreditId");
			
			$allCredits = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new Credit( $row["CreditId"] , $row["CompanyCreditPoint"] ,$row["CreditAmount"], $row["PaymentDueDate"], $row["CompanyId"] );
				array_push($allCredits, $userObj);
			}
			
			return $allCredits;
		}
	
	
	
	
	public static function CheckCredits($CompanyId){
			$db = new DB();
			$result = $db->getDataTable("select  CompanyId from credit order by CompanyId");
			$bool=true;
			
			while($row = $result->fetch_assoc()) {
				if($row["CompanyId"]==$CompanyId )
				{
					$bool=false;
				}
				
			}
		return $bool;
		
		
		}
	
	
	public static function DeleteCredit($CompanyId) {
			$db = new DB();
			$success = $db->executeQuery("DELETE FROM credit WHERE CompanyId='$CompanyId'");
			return $success;
		}
	
	
	
	
	public static function UpdateCredit($CompanyId,$PaymentDueDate) {
			$db = new DB();
			$success = $db->executeQuery("UPDATE credit SET PaymentDueDate='$PaymentDueDate' WHERE CompanyId='$CompanyId'");
			return $success;
			}
	
	
	


	public static function SelectCredit($CompanyId) {
			$db = new DB();
			$result = $db->getDataTable("select   CreditId,CompanyCreditPoint,CreditAmount,PaymentDueDate, CompanyId from credit WHERE CompanyId='$CompanyId'");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new Credit( $row["CreditId"] , $row["CompanyCreditPoint"] ,$row["CreditAmount"], $row["PaymentDueDate"], $row["CompanyId"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
			
			
			
			
			}
	
	}
?>