<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$bloodgrp=$_POST['bloodgrp'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];

$sql = "INSERT INTO donor_registration (fname,lname,dob,age,sex,bloodgrp,phone,address,city,state,country) VALUES ('$fname','$lname','$dob','$age','$sex','$bloodgrp','$phone','$address','$city','$state','$country')";

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