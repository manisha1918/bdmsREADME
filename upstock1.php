<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$sno=$_POST['sno'];
$bank_id=$_POST['bank_id'];
$units=$_POST['units'];
$availability=$_POST['availability'];



$sql = "UPDATE blood_stock SET bank_id='{$bank_id}', units='{$units}',availability='{$availability}' WHERE sno={$sno}";
$result = mysqli_query($conn,$sql);


header('location:stock.php');

?>