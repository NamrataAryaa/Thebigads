<?php

include "../class/addsubcategory.php";

$id = $_REQUEST["id"];
$sname = $_POST["cn"];
$sslug = $_POST["cs"];
$skey = $_POST["ck"];

$subobj = new addsubcategory();

$subobj->add($id,$sname,$sslug,$skey);

?>