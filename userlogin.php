<?php 
	if( isset($_POST["uName"]) && isset($_POST["uPassword"]) ) 
	{ 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cengbank";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
			die("Connection Error: " . $conn->connect_error);
		}
		
		$conn->set_charset("utf8");
		
		$query = "select UserName from company where UserName = '".$_POST["uName"]."' and Password = '".$_POST["uPassword"]."'";
		$result = $conn->query($query);
		
		$row = $result->fetch_assoc();
		
		if($row['UserName'] == null)
		{
			$message = "Incorrect entry, try again";
		}
		else
		{
			session_start();
			$_SESSION['activeUser'] = $row['UserName'];
			
			header("location: userr.php");
		}	
	}
	else
	{
		$message = "";
	} 

	
	
	
				if(isset($_POST['register']))
								{
									
   header("location: UserRegister.php");
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
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>PHP Session</title>
		<style type="text/css">
			form {
			width: 400px;
			margin-left: auto;
			margin-right: auto;
			padding: 15px;
			background-color: #FAFAFA;
			}
		</style>
	</head>
	<body> 
		<form action="<?php $_PHP_SELF ?>" method="POST"> 
			<table>
				<tr>
					<td>
						Enter Admin Name : 
					</td>
					<td>
						<input type="text" name="uName" />
					</td>
				</tr>
				<tr>
					<td>
						Enter Password : 
					</td>
					<td>
						<input type="password" name="uPassword" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<?php echo $message; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="login" value="login" />
					</td>
					<td colspan="2">
						<input type="submit" name="register" value="register" />
					</td>
					
				</tr>
			</table>
		</form> 
	</body> 
</html>
