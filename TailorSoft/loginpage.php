<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
	.mq
	{
		margin:6%;
		font-size:50px;
	}
	
	</style>
</head>
<body>
	<div class="div-1">
	<marquee class="mq">Welcome to Tailorsoft</marquee><br>
	<form action="" method="POST" style="margin-left:38%;">
	
		<input style="padding:12px;border-radius:10px;background-color:seagreen;font-size:25px;" type="submit" name="admin_login" value="Admin Login"  required>&nbsp;&nbsp;&nbsp;&nbsp;
		<input style="padding:12px;border-radius:10px;background-color:seagreen;font-size:25px;" type="submit" name="employee_login" value="Employee Login" required>

	</form>

	<!-- Login for Admin and Employee -->

	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['employee_login'])){
			header("Location: employee_login.php");
		}
	?>
	</div>
</body>
</html>