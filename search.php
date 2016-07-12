<?php
include "config.php";

class search{



function searching($n) {

    $obj = new connect();

    $conn = $obj->createcon();

    $sql = "SELECT * FROM categories where CategoryName='".$n."'";

    $result = $obj->execute($conn,$sql);

    $obj->destroycon($conn);

    return $result;

}

}


?>