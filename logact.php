<?php
include "config.php";

$em = $_POST["un"];
$pwd = $_POST["pw"];


$obj = new connect();

$conn = $obj->createcon();

$sql = "select * from thebigads.user where email='".$em."' and passw='".$pwd."'";


$res = $obj->execute($conn,$sql);

if(mysqli_num_rows($res)>0) {
	header("location:../../admin/views/dashboard.php");
}
else {
echo "wrong email or password";
header("location:../../user/login.php");
}

?>