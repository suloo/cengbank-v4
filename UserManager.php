<?php 
	require_once("C:/xampp/htdocs/proca/DB.php");
	require_once("C:/xampp/htdocs/proca/User.php");
	
	class UserManager {
		
		public static function getAllUsers () {
			$db = new DB();
			$result = $db->getDataTable("select  Name,Address, Phone, EMail, CompanyId , Password, UserName from company order by Name");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new User( $row["Name"] , $row["Address"] ,$row["Phone"],$row["EMail"],$row["CompanyId"],$row["Password"],$row["UserName"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		}
		
		public static function Check($Name){
			$db = new DB();
			$result = $db->getDataTable("select  Name from company order by Name");
			$bool=true;
			
			while($row = $result->fetch_assoc()) {
				if($row["Name"]==$Name )
				{
					$bool=false;
				}
				
			}
		return $bool;
		
		
		}
		
			public static function Checkusername($Name){
			$db = new DB();
			$result = $db->getDataTable("select  UserName from company order by UserName");
			$bool=true;
			
			while($row = $result->fetch_assoc()) {
				if($row["UserName"]==$Name )
				{
					$bool=false;
				}
				
			}
		return $bool;
		
		
		}
		
		
		
		public static function getuser($Name){
		$db = new DB();
		$Namee="jakuzi";
			$result = $db->getDataTable("select  Name,Address, Phone, EMail, CompanyId , Password, UserName from company where  UserName='$Name'");
		
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new User( $row["Name"] , $row["Address"] ,$row["Phone"],$row["EMail"],$row["CompanyId"],$row["Password"],$row["UserName"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
		
		
		}
			
		
		
		
		
		
		
		public static function insertNewUser($Name, $Address, $Phone, $EMail, $Password, $UserName) {
			$db = new DB();
			$success = $db->executeQuery("INSERT INTO company(Name, Address, Phone,EMail,Password,UserName) VALUES ('$Name', '$Address', '$Phone', '$EMail','$Password', '$UserName')");
			
			return $success;
		
		
		
		}
			
			
			
			
			
			
			
			public static function DeleteUser($Name) {
			$db = new DB();
			$success = $db->executeQuery("DELETE FROM company WHERE Name='$Name'");
			return $success;
		}
			public static function UpdateUser($Name,$Password) {
			$db = new DB();
			$success = $db->executeQuery("UPDATE company SET Password='$Password' WHERE Name='$Name'");
			return $success;
			}
			public static function UpdateUsername($Name,$Password) {
			$db = new DB();
			$success = $db->executeQuery("UPDATE company SET Password='$Password' WHERE Username='$Name'");
			return $success;
			}
			
			
			public static function SelectUser($Name) {
			$db = new DB();
			$result = $db->getDataTable("select  Name,Address, Phone, EMail, CompanyId , Password, UserName from company WHERE Name='$Name'");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new User( $row["Name"] , $row["Address"] ,$row["Phone"],$row["EMail"],$row["CompanyId"],$row["Password"],$row["UserName"] );
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
			
			
			
			
			}
			public static function id($Name)
			{
				$db = new DB();
				$result = $db->getDataTable("select  CompanyId from company WHERE Name='$Name'");
			$allUsers = array();
			while($row = $result->fetch_assoc()) {
				$userObj = new c( $row["CompanyId"] );
				array_push($allUsers, $userObj);
			}
			
			
			return $allUsers;
			
			
		
			}		

			
			public static function insertNewAccount($Name,$id) {
			$db = new DB();
			$accountnu=rand(100000,999999);
			echo "$Name";
			
			//$Id = $db->executeQuery("select  CompanyId from company where  Name='$Name'");
			//echo "sekfhklsfsjlskfj  $Id fvgbhn";
			$success = $db->executeQuery("INSERT INTO account(AccountBalance,CompanyId,AccountNumber) VALUES (180000,'$id','$accountnu' )  ");
			
			return $success;
		
		
		
		}
	
		
	
	}
?>