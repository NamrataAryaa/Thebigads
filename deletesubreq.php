<?php

include "../class/deletesub.php";

$cname = $_REQUEST["name"];

$dobj = new delete();

$dobj->deletion($cname);

?>