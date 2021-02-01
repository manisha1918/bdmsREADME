<!DOCTYPE html>
<html>
<head>
	<title>Blood Camp List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
#bc {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#bc td, #bc th {
  border: 1px solid #ddd;
  padding: 8px;
}

#bc tr:nth-child(even){background-color: #f2f2f2;}

#bc tr:hover {background-color: #ddd;}

#bc th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
#bt{
	
	color: #fff;
	background: red;
	margin-left: 90%;
	padding: 5px;
	text-align: center;
}
</style>

</head>
<div id="bt" style="margin-left: 90%"><a href="home_page.html">Back</a></div>
<h1><center>BLOOD CAMPS<center></h1>
<body>

<center><div id="form">
	<form method="post" action="bcinfo.php">
	<table id="bc">
		<tr>
			<th>Camp no</th>
			<th>Bank Id</th>
			<th>Org Id</th>
			<th>Date</th>
			<th>Time</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
		</tr>

<?php
       
$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$sql = "SELECT * from blood_camp_list";
$result = mysqli_query($conn,$sql);
$nums = mysqli_num_rows($result);

while($res = mysqli_fetch_array($result)){
	echo "<tr>
	<td>".$res["camp_no"]."</td>
	<td>".$res["bank_id"]."</td>
	<td>".$res["org_id"]."</td>
	<td>".$res["date"]."</td>
	<td>".$res["time"]."</td>
	<td>".$res["address"]."</td>
	<td>".$res["city"]."</td>
	<td>".$res["state"]."</td>
	";
}


?>
</table>
	
</div></center>
</div>

</body>
</html>