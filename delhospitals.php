<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$hosp_id = $_GET['hid'];
$sql = "DELETE FROM hospital_list WHERE hosp_id = '$hosp_id'";

$result = mysqli_query($conn,$sql);

header('location:hospitals.php');

?>