<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
#bb {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#bb td, #bb th {
  border: 1px solid #ddd;
  padding: 8px;
}

#bb tr:nth-child(even){background-color: #f2f2f2;}

#bb tr:hover {background-color: #ddd;}

#bb th {
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
<h1><center>BLOOD BANKS<center></h1>
<body>

<center><div id="form">
	<form method="post" action="bbinfo.html">
	<table id="bb">
		<tr>
			<th>Bank Id</th>
			<th>Blood Bank Name</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Phone Number</th>
		</tr>

<?php
       
$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$sql = "SELECT * from blood_bank_list";
$result = mysqli_query($conn,$sql);
$nums = mysqli_num_rows($result);

while($res = mysqli_fetch_array($result)){
	echo "<tr>
	<td>".$res["bank_id"]."</td>
	<td>".$res["bank_name"]."</td>
	<td>".$res["address"]."</td>
	<td>".$res["city"]."</td>
	<td>".$res["state"]."</td>
	<td>".$res["phone"]."</td></tr>
	";
}


?>
</table>
	
</div></center>
</div>

</body>
</html>