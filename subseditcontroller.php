<?php

$id = $_REQUEST["id"];
$sn = $_POST["sn"];
$na = $_POST["na"];
$dur = $_POST["dur"];
$price = $_POST["price"];
$e = $_POST["e"];

include "../class/subseditclass.php";

$ob = new subscriptionEdit();

$ob->subsedit($sn,$dur,$na,$price,$e,$id);

?>