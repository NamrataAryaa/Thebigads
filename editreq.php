<?php

include "../class/edit.php";


$objedit = new edit();
$catname = $_POST["cn"];
$catslug = $_POST["cs"];
$catkey = $_POST["ck"];
$catid = $_REQUEST["id"];


$objedit->edition($catname,$catslug,$catkey,$catid);

?>