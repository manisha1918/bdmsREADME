<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$bank_id=$_POST['bank_id'];
$hosp_name=$_POST['hosp_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];


$sql = "INSERT INTO hospital_list (bank_id,hosp_name,address,city,state,phone) VALUES ('$bank_id','$hosp_name','$address','$city','$state','$phone')";



if(mysqli_query($conn,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header('location:hospitals.php');

?>