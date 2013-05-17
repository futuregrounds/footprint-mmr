<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
    
    
    
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('examples/trucks_management')?>'>Trucks</a> | 
        <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
        <a href='<?php echo site_url('examples/groups_management')?>'>Groups</a> |
        <a href='<?php echo site_url('examples/tools_management')?>'>Tools</a> |
        <a href='<?php echo site_url('examples/jobs_management')?>'>Jobs</a> |
        <a href='<?php echo site_url('examples/film_management')?>'>Film</a> |
        <a href='<?php echo site_url('examples/actor_management')?>'>Actors</a> |
        <a href='<?php echo site_url('examples/category_management')?>'>Category</a> |
        <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
        <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> |
        <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
       <a href='<?php echo site_url('examples/payments_management')?>'>Payments</a> |
       <a href='<?php echo site_url('examples/products_management')?>'>Products</a>
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>

<!-- drag boxes -->
<div>
<?php
	
?>
</div>
<div>

<!-- This section is for EMPLOYEES -->
<?php
	$con = mysql_connect("localhost","sampo2","uns29buNjaMb");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
 
	mysql_select_db("sampo2_footprint", $con);
 
	$result = mysql_query("SELECT * FROM employees");
 
	echo "
			<table border='1'>
			<tr>
			<th>firstName</th>
			<th>lastName</th>
			<th>employeePic</th>
			</tr>
		";
 
	while($row = mysql_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['firstName'] . "</td>";
   			echo "<td>" . $row['lastName'] . "</td>";
  			echo "<td>" . $row['employeePic'] . "</td>";
  			echo "</tr>";
  		}
  		
	echo "</table>";
 
	mysql_close($con);
?>
	<br />

<!-- This section is for GROUPS -->
<?php
	$con = mysql_connect("localhost","sampo2","uns29buNjaMb");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
 
	mysql_select_db("sampo2_footprint", $con);
 
	$result = mysql_query("SELECT * FROM groups");
 
	echo "
			<table border='1'>
			<tr>
			<th>Group Name</th>
			<th>Group Leader</th>
			<th>Group Picture</th>
			</tr>
		";
 
	while($row = mysql_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['groupName'] . "</td>";
   			echo "<td>" . $row['groupLeader'] . "</td>";
  			echo "<td>" . $row['groupPic'] . "</td>";
  			echo "</tr>";
  		}
  		
	echo "</table>";
 
	mysql_close($con);
?>
	
	<br />
	
<!-- This section is for TRUCKS -->
<?php
	$con = mysql_connect("localhost","sampo2","uns29buNjaMb");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
 
	mysql_select_db("sampo2_footprint", $con);
 
	$result = mysql_query("SELECT * FROM employees");
 
	echo "
			<table border='1'>
			<tr>
			<th>firstName</th>
			<th>lastName</th>
			<th>employeePic</th>
			</tr>
		";
 
	while($row = mysql_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['firstName'] . "</td>";
   			echo "<td>" . $row['lastName'] . "</td>";
  			echo "<td>" . $row['employeePic'] . "</td>";
  			echo "</tr>";
  		}
  		
	echo "</table>";
 
	mysql_close($con);
?>

<br />

<!-- This section is for JOBS -->
<?php
	$con = mysql_connect("localhost","sampo2","uns29buNjaMb");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
 
	mysql_select_db("sampo2_footprint", $con);
 
	$result = mysql_query("SELECT * FROM employees");
 
	echo "
			<table border='1'>
			<tr>
			<th>firstName</th>
			<th>lastName</th>
			<th>employeePic</th>
			</tr>
		";
 
	while($row = mysql_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['firstName'] . "</td>";
   			echo "<td>" . $row['lastName'] . "</td>";
  			echo "<td>" . $row['employeePic'] . "</td>";
  			echo "</tr>";
  		}
  		
	echo "</table>";
 
	mysql_close($con);
?>

<br />

<!-- This section is for TOOLS -->
<?php
	$con = mysql_connect("localhost","sampo2","uns29buNjaMb");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
 
	mysql_select_db("sampo2_footprint", $con);
 
	$result = mysql_query("SELECT * FROM employees");
 
	echo "
			<table border='1'>
			<tr>
			<th>firstName</th>
			<th>lastName</th>
			<th>employeePic</th>
			</tr>
		";
 
	while($row = mysql_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['firstName'] . "</td>";
   			echo "<td>" . $row['lastName'] . "</td>";
  			echo "<td>" . $row['employeePic'] . "</td>";
  			echo "</tr>";
  		}
  		
	echo "</table>";
 
	mysql_close($con);
?>

<!--  This section is for adding users to jobs -->
<?php
	$con = mysql_connect("localhost","sampo2","uns29buNjaMb");
		if (!$con)
  			{
  				die('Could not connect: ' . mysql_error());
  			}
 
	mysql_select_db("sampo2_footprint", $con);
 
	$result = mysql_query("SELECT * FROM film");
 
	echo "
			<table border='1'>
			<tr>
			<th>Film Title</th>
			<th>Description</th>
			</tr>
		";
 
	while($row = mysql_fetch_array($result))
  		{
  			echo "<tr>";
  			echo "<td>" . $row['title'] . "</td>";
  			echo "<td>" . $row['description'] . "</td>";
  			echo "</tr>";
  		}
  		
	echo "</table>";
 
	mysql_close($con);
?>


</div>

<!-- Beginning footer -->
<div><br />
&copy;2013 - Nick LaBrant  |  Footprint&trade;</div>
<!-- End of Footer -->
</body>
</html>
 