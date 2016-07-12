<?php

include "../class/delete.php";

$cname = $_REQUEST["name"];

$dobj = new delete();

$dobj->deletion($cname);

?>