<?php

include "../class/adsub.php";


$objins = new add();
$sname = $_POST["sn"];
$na = $_POST["na"];
$price = $_POST["price"];
$en = $_POST["e"];
$dur = $_POST["dur"];



$objins->add1($dur,$na,$price,$en,$sname);

?>