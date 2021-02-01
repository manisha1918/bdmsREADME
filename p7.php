<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$order_id=$_POST['order_id'];
$bank_id=$_POST['bank_id'];
$hosp_id=$_POST['hosp_id'];
$bloodgrp=$_POST['bloodgrp'];
$units=$_POST['units'];

$sql = "INSERT INTO orders (order_id,bank_id,hosp_id,bloodgrp,units) VALUES ('$order_id','$bank_id','$hosp_id','$bloodgrp','$units')";

if(mysqli_query($conn,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header('location:home_page.html');

?>

