<!DOCTYPE html>
<html>
<head>
	<title>Employee Dashboard </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			/* background-color: whitesmoke; */
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			/* border: solid 1px black; */
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		.manu{
			padding: 12px;
			margin-top:20px;
			border-radius:10px;
		}
		.div2{
			font-size:30px;
			border-radius:10px;
		}
	</style>
<?php
		session_start();
		$connection=mysqli_connect("localhost","root","");
		$db= mysqli_select_db($connection,"tailorsoft");
	?>
</head>
<body>
<div id="header"><br>
		<h3 style="text-align:center;">Welcome to Employee Dashboard </h3>
		<h4 style="text-align:center;color:black;margin-left:1%;font-size:30px;">Email: <?php echo $_SESSION['Emp_email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['Emp_name'];?> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></h4>

	</div>
	<span id="top_span"></span>
	<div id="left_side">
		<br><br><br>
        <form action="" method="POST">
			<table>
				<tr>
					<td>
						<input class="manu" type="submit" name="search_employee" value="Search Employee">
					</td>
				</tr>
				<tr>
					<td>
						<input  class="manu" type="submit" name="edit_employee" value="Edit Employee">
					</td>
				</tr>
			</table>
		</form>
        </div>
	<div id="right_side"><br><br>
		<div id="demo">

			<?php
				if(isset($_POST['search_employee']))
				{
					?>
				
					<form action="" method="POST">
					&nbsp;&nbsp;<b style="font-size:40px;">Enter employee id:</b>&nbsp;&nbsp;
					 <input type="text" style="padding:20px;width:200px;border-radius:7px;" name="Emp_id">
					<input type="submit"style="padding:12px;border-radius:10px;background-color:seagreen;font-size:25px;"  name="search_by_Emp_id_for_search" value="Search">
					</form><br><br>
					<br><br>
				
					<?php
				}
				if(isset($_POST['search_by_Emp_id_for_search']))
				{
					$query = "SELECT * from employee where Emp_id =$_POST[Emp_id]";
					// echo $query;
					$query_run = mysqli_query($connection, $query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
							<div style="font-size:25px;">
						<table>
							<tr>
								<td>
									<b>Employee id</b>
								</td> 
								<td>
									<input class="div2" type="text" value="<?php echo $row['Emp_id'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Name:</b>
								</td> 
								<td>
									<input class="div2" type="text" value="<?php echo $row['Emp_name'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Email:</b>
								</td> 
								<td>
									<input class="div2" type="text"  value="<?php echo $row['Emp_email'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Allocated Project:</b>
								</td> 
								<td>
									<input class="div2" type="text" value="<?php echo $row['allocated_project'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile Number:</b>
								</td> 
								<td>
									<input  class="div2" type="text"  value="<?php echo $row['Phone_no'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Reporting Manager</b>
								</td> 
								<td>
									<input  class="div2" type="text" value="<?php echo $row['Reporting_manager'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Password:</b>
								</td> 
								<td>
									<input class="div2" type="password" value="<?php echo $row['Emp_pwd'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Address:</b>
								</td> 
								<td>
									<input class="div2" type="text" value="<?php echo $row['Address'];?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Employee Skills:</b>
								</td> 
								<td>
									<input class="div2" type="text" value="<?php echo $row['Skill'];?>" disabled>
								</td>
							</tr>

						</table>
						</div>
						<form action="employee_dashboard.php" method="POST">
							<button type="submit" style="background-color: black; padding: 10px; width: 100px;margin-left:500px;
							margin-top:30px; border-radius:10px;color: white; "name="button">Back</button>
						</form>
						<?php
					}
				}
			?>
		<?php
				if(isset($_POST['edit_employee']))
				{
					$query = "SELECT * from employee where Emp_email ='$_SESSION[Emp_email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 			
					{
						?>
						<form action="edit_employee.php" method="POST">
						<div style="font-size:25px;">
						<table>
						
							<tr>
								<td>
									<b>Employee Name:</b>
								</td> 
								<td>
									<input type="text" class="div2" name="Emp_name" value="<?php echo $row['Emp_name'];?>">
									
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Email:</b>
								</td> 
								<td>
									<input type="text" class="div2" name="Emp_email" value="<?php echo $row['Emp_email'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Address:</b>
								</td> 
								<td>
									<input type="text" class="div2" name="Address" value="<?php echo $row['Address'];?>">
								</td>
							</tr>
                            <tr>
								<td>
									<b>Employee Skills:</b>
								</td> 
								<td>
									<input type="text" class="div2" name="Skill" value="<?php echo $row['Skill'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile Number:</b>
								</td> 
								<td>
									<input type="text" class="div2" name="Phone_no" value="<?php echo $row['Phone_no'];?>">
								</td>
							</tr>
							<tr>
								
								<td>
									<input type="submit"  style="width:100px;font-size:26px;height:45px;border-radius:5px;background-color:dodgerblue;" name="update your deatils" value="Update and save">
								</td>
							</tr>
						</table>



					</div>


					</form>
					<!-- <form action="edit_employee.php" method="post">

							<button type="submit" >updated details</button> -->


						<!-- <table>
						<tr>
								
								<td>
									<input type="submit" name="update your deatils" value="Update and save">
								</td>
							</tr>
						</table> -->
					
					<!-- </form> -->
				<?php
					}
				}
			?>

		</div>
	</div>
</body>
</html>