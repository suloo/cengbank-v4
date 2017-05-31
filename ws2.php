<?php
header('Access-Control-Allow-Origin: *');		// connect DB
		$servername = "localhost";
		$username = "sulo";
		$password = "1234";
		$dbname = "cengbank";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
			die("Connection error: " . $conn->connect_error);
		}
		
		$conn->set_charset("utf8");
		
		// read POST variables
		$AccountNumber =$_POST['number'];
		$AccountNumber = "%".$AccountNumber."%";
		$Amount =$_POST['amount'];
		
		
		// prepare, bind and execute SQL statement
		$stmt = $conn->prepare("SELECT AccountBalance FROM account WHERE AccountNumber LIKE ?");
		$stmt->bind_param("s",$AccountNumber); // si: string integer
		$stmt->execute();
		$stmt->bind_result($AccountBalance);
		$stmt->fetch();
		
		if($AccountBalance!=null)
		{
			$stmt->close();
			$newbalance=$AccountBalance + $Amount;
			$stmt = $conn->prepare("UPDATE account SET AccountBalance= ? WHERE AccountNumber LIKE ?");
			$stmt->bind_param("is",$newbalance,$AccountNumber); // si: string integer
			$stmt->execute();
			$stmt->close(); // close statement
			
			echo "Payment Success";
			
		}
		else{
			echo "Error";
			
			
		}
		
		
		$conn->close(); // close DB connection
	
	?>