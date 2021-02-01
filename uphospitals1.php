<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$hid=$_POST['hosp_id'];
$bid=$_POST['bank_id'];
$hname=$_POST['hosp_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];


$sql = "UPDATE hospital_list SET bank_id='{$bid}', hosp_name='{$hname}',address='{$address}',city='{$city}',state='{$state}',phone='{$phone}' WHERE hosp_id={$hid}";
$result = mysqli_query($conn,$sql);


header('location:hospitals.php');

?>