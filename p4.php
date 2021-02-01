<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$org_name=$_POST['org_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];

$sql1 = "INSERT INTO organization_list (org_name,address,city,state,phone) VALUES ('$org_name','$address','$city','$state','$phone')";

if(mysqli_query($conn,$sql1))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header('location:orgs.php');

?>