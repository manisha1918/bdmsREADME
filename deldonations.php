<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$blood_id = $_GET['blid'];
$sql = "DELETE FROM stock_details WHERE blood_id = '$blood_id'";

$result = mysqli_query($conn,$sql);

header('location:donations.php');


?>