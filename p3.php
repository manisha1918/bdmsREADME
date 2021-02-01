<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$bank_name=$_POST['bank_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];


$sql = "INSERT INTO blood_bank_list (bank_name,address,city,state,phone) VALUES ('$bank_name','$address','$city','$state','$phone')";



if(mysqli_query($conn,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header('location:blood_banks.php');

?>