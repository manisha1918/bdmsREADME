<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$camp_no=$_POST['camp_no'];
$bid=$_POST['bank_id'];
$orgid=$_POST['org_id'];
$date=$_POST['date'];
$time=$_POST['time'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];


$sql = "UPDATE blood_camp_list SET bank_id='{$bid}',org_id='{$orgid}',date='{$date}',time='{$time}',address='{$address}',city='{$city}',state='{$state}' WHERE camp_no={$camp_no}";
$result = mysqli_query($conn,$sql);


header('location:camps.php');

?>