<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
<style>
body{
	margin:0px;
	border:0px;
}
#header{
	width: 100%;
	height:120px;
	background: black;
	color:white;
}
#sidebar{
	width: 250px;
	height: 600px;
	background:red ;
	float: left;
}
#data{
	height: 700px;
	background: white;
	overflow-y: scroll;
}
 a:link, a:visited {
    	background-color: red;
    	color: black;
    	text-align:center;
    	text-decoration: none;
    	display: inline-block;
    }

a:hover, a:active {
	background-color: white;
}
ul li{
	list-style-type: none;
	padding :20px;
	display: block;
	border-bottom: 1px solid black;
}
#hos {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}


#hos td, #hos th {
  border: 1px solid #ddd;
  padding: 8px;
}

#hos tr:nth-child(even){background-color: #f2f2f2;}

#hos tr:hover {background-color: #ddd;}

#hos th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
#bt{
	color: #fff;
	background: white;
	margin-left: 90%;
}

</style>
</head>
<body>
	<div id="header">
		<div style="margin-left: 90%"><br><a href="home_page.html">Logout</a></div>
		<center><h2>WELCOME ADMIN!!</h2></center>
	</div>

<div id="sidebar">
<ul>
	<li><a href = "donors.php">DONORS</a></li><br>
    <li><a href = "donations.php">DONATIONS</a></li><br>
    <li><a href = "stock.php">STOCK DETAILS</a></li><br>
    <li><a href = "blood_banks.php">BLOOD BANKS</a></li><br>
    <li><a href = "orgs.php">ORGANIZATIONS</a></li><br>
    <li><a href = "camps.php">BLOOD CAMPS</a></li>
     <li><a href = "orders.php">ORDERS</a></li>
    <li><a href = "hospitals.php">HOSPITALS</a></li>
</ul>

</div>

    <div id="data">
    	<h1>Hospitals:</h1>
    	<p id="bt">
    		<a href = "add_hosp.html">ADD</a>
    	</p>
    	<center><div id="form">
	<form method="post" action="hospitals.php">
	<table id="hos">
		<tr>
			<th>Hospital Id</th>
			<th>Bank Id</th>
			<th>Hospital Name</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Phone Number</th>
			<th colspan="2">Operations</th>
		</tr>

<?php
       
$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$sql = "SELECT * from hospital_list";
$result = mysqli_query($conn,$sql);
$nums = mysqli_num_rows($result);

while($res = mysqli_fetch_array($result)){
	echo "<tr>
	<td>".$res["hosp_id"]."</td>
	<td>".$res["bank_id"]."</td>
	<td>".$res["hosp_name"]."</td>
	<td>".$res["address"]."</td>
	<td>".$res["city"]."</td>
	<td>".$res["state"]."</td>
	<td>".$res["phone"]."</td>
	<td><a href = 'uphospitals.php?hid=$res[hosp_id]& bid=$res[bank_id]& hn=$res[hosp_name]& add=$res[address]& ci=$res[city]& st=$res[state]& ph=$res[phone]'>UPDATE</td>
		<td><a href = 'delhospitals.php?hid=$res[hosp_id]'>DELETE</td></tr>
	";
}


?>
</table>
	
</div></center>
</div>
    	
    	
    	
    </div>

</body>
</html>