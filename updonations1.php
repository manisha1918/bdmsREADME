<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$blid=$_POST['blood_id'];
$units=$_POST['units'];
$issue=$_POST['issue_date'];
$expiry=$_POST['expiry_date'];



$sql = "UPDATE stock_details SET units='{$units}',issue_date='{$issue}',expiry_date='{$expiry}' WHERE blood_id={$blid}";
$result = mysqli_query($conn,$sql);


header('location:donations.php');

?>