<?php
       
$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$o_id = $_GET['oid'];

$sql = "SELECT * from orders WHERE order_id={$o_id}";
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
    	<center><div id="frm">
		<h1><center>Order Request</center></h1><br>
			<form method="post" action="uporders1.php">
            <table align="left">
            	<tr>
			         <td width="200px" height="50px">Bank Id:</td>
			         <input type="hidden" name="order_id" value="<?php echo $res['order_id'] ?>">
			         <td width="200px" height="50px"><input type="text" value="<?php echo $res['bank_id'] ?>" name="bank_id"></td>
		        </tr>
            	<tr>
			         <td width="200px" height="50px">Hospital Id:</td>
			         <td width="200px" height="50px"><input type="text" value="<?php echo $res['hosp_id'] ?>" name="hosp_id"></td>
                </tr>
                <tr>
			         <td width="200px" height="50px">Blood Group:</td>
			         <td width="200px" height="50px"><input type="text" value="<?php echo $res['bloodgrp'] ?>" name="bloodgrp"></td>
	            </tr>
	            <tr>
			          <td width="200px" height="50px">Required Units:</td>
			          <td width="200px" height="50px"><input type="text" value="<?php echo $res['units'] ?>" name="units"></td>
		        </tr>
            </table><br>
		    <tr>
			<td><center><input type="Submit" id="btn" name="sub" value="Update"><center></td>
		    </tr>
	    </div>
    </form>
 <?php
    }
  }
?>
    	
    </div>


</body>
</html>