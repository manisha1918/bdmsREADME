<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$bank_id=$_POST['bank_id'];
$donor_id=$_POST['donor_id'];
$units=$_POST['units'];
$bloodgrp=$_POST['bloodgrp'];
$issue_date=$_POST['issue_date'];
$expiry_date=$_POST['expiry_date'];


$sql = "INSERT INTO stock_details (bank_id,donor_id,units,bloodgrp,issue_date,expiry_date) VALUES ('$bank_id','$donor_id','$units','$bloodgrp','$issue_date','$expiry_date')";



if(mysqli_query($conn,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header('location:donations.php');

?>