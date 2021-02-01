<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$bank_id=$_POST['bank_id'];
$units=$_POST['units'];
$availability=$_POST['availability'];

$sql = "INSERT INTO blood_stock (bank_id,units,availability) VALUES ('$bank_id','$units','$availability')";



if(mysqli_query($conn,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header('location:stock.php');

?>