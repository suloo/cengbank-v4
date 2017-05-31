<?php
	if(isset($_POST['code'])) {
		// connect DB
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cengbank";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
			die("Connection error: " . $conn->connect_error);
		}
		
		$conn->set_charset("utf8");
		
		// read POST variables
		$number_of_countries = !empty($_POST['num']) ? intval($_POST['num']) : 10; // 10 is the default
		$format = strtolower($_POST['format']) == 'json' ? 'json' : 'xml'; // xml is the default
		$code = $_POST['code'];
		$code = "%".$code."%";
		
		// prepare, bind and execute SQL statement
		$stmt = $conn->prepare("SELECT  Name, Phone,CompanyId FROM company WHERE Name LIKE ? ORDER BY Name LIMIT ?");
		$stmt->bind_param("si", $code, $number_of_countries); // si: string integer
		$stmt->execute();
		$stmt->bind_result($Name, $Phone,$code);
		
		$countries = array();
		while ($stmt->fetch()) {
			array_push( $countries, array( "Name"=>$Name, "Phone"=>$Phone,"CompanyId"=>$code) );
		}
		
		$stmt->close(); // close statement
		
		
		if($format == 'json') { // JSON output
			header('Content-type: application/json');
			echo json_encode(array($countries));
		}
		else { // XML output
			header('Content-type: text/xml');
			echo '<countries>';
			
			foreach($countries as $index => $country) {
				
				echo '<country>';
				foreach($country as $key => $value) {
					echo '<',$key,'>';
					echo htmlentities($value);
					echo '</',$key,'>';
				}
				echo '</country>';
				
			}
			
			echo '</countries>';
		}
		
		$conn->close(); // close DB connection
	}
?>		