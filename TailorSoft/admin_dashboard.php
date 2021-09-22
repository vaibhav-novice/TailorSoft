<!DOCTYPE html>
<html>
<head>
	<title> Admin Dashboard </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap-4.4.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
	<!-- Giving an Internal CSS. -->
	
	<style type="text/css" rel="stylesheet">
		body{
			background-color: beige;
		}
		h4{
			margin-left:45%;
			font-size:20px;
		}
		h3{
			font-size: 30px;
    text-align: center;
		}
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: gray;
			 
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 45%;
			width: 80%;
			color: rgb(1,205,230);
			position: fixed;
			left: 17%;
			top: 25%;
			color: green;
			
		}
		#top_span{
			top: 12%;
			width: 60%;
			left: 12%;
			
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		#sp{
			font-size:20px;
			margin-left:65%;
		}
	button{
			color: green;
			margin-left:50%;
			border-radius:10px;
			background-color:rgb(255,125,102);
			padding: 10px;
		}
		.manu{
			padding: 12px;
			margin-top:20px;
			border-radius:10px;
		}
		.div1{
			font-size: 37px;
		}
		.div2{
			font-size:30px;
			border-radius:10px;
			display: inline-block;
		}
	</style>
<?php
		session_start();
		
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"tailorsoft");
	?>
</head>
<body>

<div id="header"><br>
		<h3> Office Collaborator System</h3>
		<h4>Admin Login </h4>
		<span id="sp">
		Email: <?php echo $_SESSION['Email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['Name'];?> 
		&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<a href="logout.php">Logout</a>
		</span>
	
		<!-- Button for serach,edit,add,delete -->

	</div>
	<span id="top_span"></span>
	<div id="left_side">
		<br><br><br>
        <form action="" method="POST" style="margin-top:30%;padding:20px">
			<table>
				<tr>
					<td>
						<input type="submit" class="manu" name="search_employee" value="Search Employee">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="manu" name="edit_employee" value="Edit Employee">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="manu" name="add_new_employee" value="Add New Employee">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="manu" name="delete_employee" value="Delete Employee">
					</td>
				</tr>
				
			</table>
		</form>
        </div>
	<div id="right_side"><br><br>
		<div id="demo">

		<!-- Search Employee -->

			<?php
				if(isset($_POST['search_employee']))
				{
					?>
					<div class="div1">
					<form action="" method="POST">
					Enter employee id:
					<input type="text" style="padding:20px;width:200px;border-radius:7px;" name="Emp_id">
					<input type="submit" style="padding:12px;border-radius:10px;background-color:seagreen;font-size:25px;" name="search_by_Emp_id_for_search" value="Search">
					</form><br><br>
				</div>	
					<?php
				}
				if(isset($_POST['search_by_Emp_id_for_search']))
				{
					$query = "select * from employee where Emp_id =$_POST[Emp_id]";
					$query_run = mysqli_query($connection, $query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table>
							<tr>
								<td>
									<b>Employee id</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['Emp_id'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Name:</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['Emp_name'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Email:</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['Emp_email'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Allocated Project:</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['allocated_project'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile Number:</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['Phone_no'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Reporting Manager</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['Reporting_manager'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Password:</b>
								</td> 
								<td>
									<input type="password"  value="<?php echo $row['Emp_pwd'];?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Address:</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['Address'];?>" disabled>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Employee Skills:</b>
								</td> 
								<td>
									<input type="text"  value="<?php echo $row['Skill'];?>" disabled>
								</td>
							</tr>
						</table>
						<form action="admin_dashboard.php" method="POST">
							<button type="submit" name="button">Back</button>
						</form>
						<?php
					}
				}
			?>
		
				<!-- Edit Employee -->


		<?php
			if(isset($_POST['edit_employee']))
			{
                ?>
                <div class="div1">
                <form action="" method="POST">
                Enter employee id to edit Details
				<input type="text" style="padding:20px;width:200px; border-radius:7px;" name="Emp_id"  >
                <input type="submit"style="padding:12px;border-radius:10px;background-color:seagreen;font-size:25px;" name="search_by_Emp_id_for_edit" value="Search">
                </form>
			</div>
               
              
                <?php
			}
			if(isset($_POST['search_by_Emp_id_for_edit']))
			{
                $query = "SELECT * from employee where Emp_id='$_POST[Emp_id]'";
				// echo $query;
                $query_run = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_employee.php" method="POST">
                    <div style="font-size:25px;">
					<table>
					<tr>
							
						<td>
							<b>Employee ID:</b>
						</td>
						<td>
								<input class="div2" type="text" name="Emp_id" value="<?php echo $row['Emp_id'];?>" >
						</td>
					</tr>
					<tr>
							<td>
								<b>Employee Password:</b>
							</td> 
							<td>
								<input class="div2" type="password" name="Emp_pwd" value="<?php echo $row['Emp_pwd'];?>">
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Allocated Project:</b>
							</td> 
							<td>
								<input class="div2" type="text" name="allocated_project" value="<?php echo $row['allocated_project'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Reporting Manager</b>
							</td> 
							<td>
								<input class="div2" type="text" name="Reporting_manager" value="<?php echo $row['Reporting_manager'];?>">
							</td>
						</tr>
							
						
                            
							<br><br>
							<tr>
								<td>
									<b>Update Details</b>
								</td>
								<td>
									<input style="width:500px;font-size:26px;height:45px;" type="submit" name="update" value="Save and Continue">
								</td>
							</tr>
							
						</table>
					</div>
					</form>
					<?php
				}
			}
		?>
	
			<!-- Delete Details of Employee -->

		<?php
			if(isset($_POST['delete_employee']))
			{
                ?>
               <div class="div1">
                <form action="delete_employee.php" method="POST">
               Enter employee id:
			   <input type="text" style="padding:20px;width:200px; border-radius:7px;" name="Emp_id">
                <input type="submit" style="padding:12px;border-radius:10px;background-color:crimson;font-size:25px;" name="search_by_Emp_id_for_search" value="Delete_Employee">
                </form></div>
                
              
				<br><br>
			
				<!-- Adding new records -->

			<?php 
            } 
				if(isset($_POST['add_new_employee'])){
					?>
					<h5 style="margin-left:32%;font-size:30px;margin-top:-3%;">Fill the given details</h5>
					<form action="add_employee.php" method="POST">
					<div style="font-size:25px;">
                    <table>
							
							<tr>
								<td>
									<b>Employee Name:</b>
								</td> 
								<td>
									<input class="div2" type="text" name='Emp_name' required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Email:</b>
								</td> 
								<td>
									<input  class="div2" type="text" name='Emp_email'  required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee Password:</b>
								</td> 
								<td>
									<input  class="div2" type="password" name='Emp_pwd'  required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Allocated Project:</b>
								</td> 
								<td>
									<input  class="div2" type="text" name='allocated_project'  required>
								</td>
							</tr>
							
							
							<tr>
								<td>
									<b>Employee Address:</b>
								</td> 
								<td>
									<input  class="div2" type="text" name='Address'  required>
								</td>
							</tr>
                            <tr>
								<td>
									<b>Employee Skills:</b>
								</td> 
								<td>
									<input  class="div2" type="text" name='Skill'  required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile Number:</b>
								</td> 
								<td>
									<input  class="div2" type="text" name='Phone_no'  required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Reporting Manager</b>
								</td> 
								<td>
									<input  class="div2" type="text" name='Reporting_manager'  required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Employee id</b>
								</td> 
								<td>
									<input  class="div2" type="text" name='Emp_id' required>
								</td>
							</tr>
							<tr>

								<td></td>
								<td>
									<input   class="div2" type="submit" name="add" value="Add Employee">
								</td>
							</tr>
							
						</table>

					</form>	
				</div>
					<form  style="margin-top: -43px;margin-left:-220px;" action="admin_dashboard.php">
					<button style="width:100px;font-size:26px;height:45px;"type="button"> Back </button>
				</form>
                    <?php
				}
			
		?>	
		</div>
	</div>
</body>
</html>
