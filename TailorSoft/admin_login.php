<!DOCTYPE html>
<html>
<head>
	<title> Admin Login </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  
	 <!-- Giving an Internal CSS. -->
	 
	 <style type="text/css" rel="stylesheet">
	.div-1{
		color:green;
		
	}
	body{
		background-color: rgb(114, 214, 217);
	}
	.mq1
	{
		margin:6%;
		font-size:50px;
	}
	form{
		margin-left: 25%;
	}
	
	</style>
</head>
<body>
	
	<marquee class="mq1">Admin Login Page</marquee>
	<form action="" method="POST" style="font-size:30px;">
		E-mail: &nbsp;&nbsp;&nbsp;&nbsp; <input style="padding:20px;width:200px; border-radius:7px;width:290px;" type="text" name="Email"  required><br><br>

		Password: <input style="padding:12px;border-radius:10px;font-size:25px;" type="password" name="Password"  required><br><br>
		<input type="submit" style="width:100px;font-size:26px;height:45px; border-radius:10px;" name="submit" >
	</form>
    
	<?php

	// Starting Session

			session_start();

		// Checking for Submit button by user

			if(isset($_POST['submit'])){

			// Connect to Database

				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"tailorsoft");
				$query = "select * from admin where Email='$_POST[Email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {

				// Checking for Credentials

					if($row['Email'] == $_POST['Email']){
						if($row['Password'] == $_POST['Password']){
							$_SESSION['Name'] = $row['Name'];
							$_SESSION['Email'] = $row['Email'];
							header("Location: admin_dashboard.php");
						}
						else{
							echo "Wrong Password !!!" ;
							
						}
					}
						else{
							echo "Wrong Email id !!";
						}
					
				}
				
			}
		?>
</body>
</html>