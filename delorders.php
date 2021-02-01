<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$order_id = $_GET['oid'];
$sql = "DELETE FROM orders WHERE order_id = '$order_id'";

$result = mysqli_query($conn,$sql);

header('location:orders.php');

?>