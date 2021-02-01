<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$bank_id=$_POST['bank_id'];
$org_id=$_POST['org_id'];
$date=$_POST['date'];
$time=$_POST['time'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];


$sql = "INSERT INTO blood_camp_list (bank_id,org_id,date,time,address,city,state) VALUES ('$bank_id','$org_id','$date','$time','$address','$city','$state')";



if(mysqli_query($conn,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header('location:camps.php');

?>