<!DOCTYPE html>
<html>
<head>
	<title> Employee Login </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div style="margin-left:37%;">
		<h3 style="text-align:center;margin-left:-550px;font-size:45px;">Employee LogIn Page</h3><br>
		<form action="" method="POST" style="font-size:25px;">
			Email ID: <input style="padding:12px;border-radius:10px;font-size:25px;" type="text" name="Emp_email" required><br><br>
			Password: <input style="padding:12px;border-radius:10px;font-size:25px;" type="password" name="Emp_pwd" required><br><br>
			<input type="submit" name="submit" style="padding:12px;border-radius:10px;background-color:seagreen;font-size:25px;width:150px;" value="Login">
		</form><br></div>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"tailorsoft");
				$query = "select * from employee where Emp_email = '$_POST[Emp_email]'";
				// echo $query;
				$query_run = mysqli_query($connection, $query) ;
				//echo $query_run;
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['Emp_email'] == $_POST['Emp_email'])
					{
						if($row['Emp_pwd'] == $_POST['Emp_pwd'])
						{
							$_SESSION['Emp_name'] =$row['Emp_name'];
							$_SESSION['Emp_email'] =$row['Emp_email'];
							header("Location: employee_dashboard.php");
						}
						else{
							echo "Wrong Password !!!";
							
						}
					}
					else
					{
						echo "Wrong UserName !!";
						
					}
				}
			}
		?>

</body>
</html>