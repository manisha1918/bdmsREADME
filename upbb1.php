<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$bid=$_POST['bank_id'];
$bname=$_POST['bank_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];


$sql = "UPDATE blood_bank_list SET bank_name='{$bname}',address='{$address}',city='{$city}',state='{$state}',phone='{$phone}' WHERE bank_id={$bid}";
$result = mysqli_query($conn,$sql);


header('location:blood_banks.php');

?>