<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tailorsoft");
	$query="UPDATE employee set Emp_pwd='$_POST[Emp_pwd]',allocated_project='$_POST[allocated_project]',Reporting_manager='$_POST[Reporting_manager]' where Emp_id=$_POST[Emp_id]";
	// echo $query;
	$query_run = mysqli_query($connection,$query);
	
?>
<script type="text/javascript">
	alert("Employee details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>



