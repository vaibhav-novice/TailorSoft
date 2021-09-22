<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"tailorsoft");
	// if($connection)
	// {
	// 	echo "Updated";
	// }
	// else{
	// 	echo "Not updated";
	// }
	// isset($_POST)

	
	$query="UPDATE employee set Emp_name='$_POST[Emp_name]',Emp_email='$_POST[Emp_email]',Address='$_POST[Address]',Skill='$_POST[Skill]',Phone_no='$_POST[Phone_no]' where Emp_email ='$_POST[Emp_email]'";
	
	// echo $_post['Emp_id'];
	// if(isset($_POST['Emp_email']))
	// {
	// 	echo "Updated";
	// }
	// else{
	// 	echo "Not updated";
	// }
	
	
	// echo $query;
	// if($query)
	// {
	// 	echo "query  Updated";
	// }
	// else{
	// 	echo "qyuery  Not updated";
	// }
	$query_run=mysqli_query($connection,$query);
	// if($query_run)
	// {
	// 	echo "query run Updated";
	// }
	// else{
	// 	echo "qyuery run Not updated";
	// }

	
	
?>
<script type="text/javascript">
	alert("employee deatils updated successfully.");
	
</script>



