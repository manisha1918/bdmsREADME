<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$bank_id = $_GET['bid'];
$sql = "DELETE FROM blood_bank_list WHERE bank_id = '$bank_id'";

$result = mysqli_query($conn,$sql);

header('location:blood_banks.php');

?>