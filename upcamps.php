<?php
       
$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$camp_no = $_GET['camp_no'];

$sql = "SELECT * from blood_camp_list WHERE camp_no={$camp_no}";
$result = mysqli_query($conn,$sql);
$nums = mysqli_num_rows($result);

if($nums > 0) {
while($res = mysqli_fetch_array($result)){

?>
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
    	<center><div>
	<form method="post" action="upcamps1.php">
	<table>
		<tr>
			<td width="200px" height="50px">Bank_id:</td>
			<input type="hidden" name="camp_no" value="<?php echo $res['camp_no'] ?>">
			<td width="200px" height="50px"><input type="text" value="<?php echo $res['bank_id'] ?>" name="bank_id"></td>
		</tr>
		<tr>
			<td width="200px" height="50px">Org_id:</td>
			<td width="200px" height="50px"><input type="text" value="<?php echo $res['org_id'] ?>" name="org_id"></td>
		</tr>
		<tr>
			<td width="200px" height="50px">Date:</td>
			<td width="200px" height="50px"><input type="text" value="<?php echo $res['date'] ?>" name="date"></td>
		</tr>
		<tr>
			<td width="200px" height="50px">Time:</td>
			<td width="200px" height="50px"><input type="text" value="<?php echo $res['time'] ?>" name="time"></td>
		</tr>
		<tr>
			<td width="200px" height="50px">Address:</td>
			<td width="200px" height="50px"><input type="text" value="<?php echo $res['address'] ?>" name="address" placeholder="Street Address"></td>
		</tr>
		<tr>
			<td width="200px" height="50px">City:</td>
			<td width="200px" height="50px"><input type="text" value="<?php echo $res['city'] ?>" name="city"></td>
		</tr>
		<tr>
			<td width="200px" height="50px">State:</td>
			<td width="200px" height="50px"><input type="text" value="<?php echo $res['state'] ?>" name="state"></td>
		</tr>
		
	</table><br>
	
	<div><br><h4 align="center"></h4></div>
		<tr>
			<td><center><input type="Submit" id="but" name="add" value="Update"><center></td>
		</tr>
	</div>
</form>


    	
    	
    </div>
    <?php
    }
  }
?>

</body>
</html>