<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$order_id=$_POST['order_id'];
$bank_id=$_POST['bank_id'];
$hosp_id=$_POST['hosp_id'];
$bloodgrp=$_POST['bloodgrp'];
$units=$_POST['units'];

$sql = "UPDATE orders SET bank_id='{$bank_id}',hosp_id='{$hosp_id}',bloodgrp='{$bloodgrp}', units='{$units}' WHERE order_id={$order_id}";
$result = mysqli_query($conn,$sql);


header('location:served.php');

?>