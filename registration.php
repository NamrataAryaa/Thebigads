


<?php
include "config.php";


$name = $_POST["name1"];
$email = $_POST["em"];
$pwd = $_POST["pwd"];

$obj = new connect();

$conn = $obj->createcon();

$sql = "INSERT INTO thebigads.user(name,email,passw) VALUES('".$name."','".$email."','".$pwd."')";

$obj->execute($conn,$sql);

$obj->destroycon($conn);

header("location: ../../index.php");


?>