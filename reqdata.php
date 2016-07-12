<?php

include "../class/insercateg.php";


$objins = new insert();
$catname = $_POST["cn"];
$catslug = $_POST["cs"];
$catkey = $_POST["ck"];

$objins->insertion($catname,$catslug,$catkey);

?>