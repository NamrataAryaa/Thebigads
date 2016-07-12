<?php


include "config.php";

$id = $_REQUEST["id"];
$cn = $_POST["cn"];
$cs = $_POST["cs"];
$ck = $_POST["ck"];

$obj = new connect();

$conn = $obj->createcon();

echo $sql = "UPDATE subcategory SET sname='$cn',sslug='$cs',skey='$ck' where id=$id ";

$obj->execute($conn,$sql);

$obj->destroycon($conn);

?>