<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$sno = $_GET['sno'];
$sql = "DELETE FROM blood_stock WHERE sno = '$sno'";

$result = mysqli_query($conn,$sql);

header('location:stock.php');


?>