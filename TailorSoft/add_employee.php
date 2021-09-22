<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tailorsoft");
	$query="INSERT into employee values('$_POST[Emp_name]','$_POST[Emp_email]','$_POST[Emp_pwd]','$_POST[allocated_project]','$_POST[Address]','$_POST[Skill]','$_POST[Phone_no]','$_POST[Reporting_manager]',$_POST[Emp_id])";
	// echo $query;
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Employee added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
