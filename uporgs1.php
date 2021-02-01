<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$orgid=$_POST['org_id'];
$orgname=$_POST['org_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];


$sql = "UPDATE organization_list SET org_name='{$orgname}',address='{$address}',city='{$city}',state='{$state}',phone='{$phone}' WHERE org_id={$orgid}";
$result = mysqli_query($conn,$sql);


header('location:orgs.php');

?>