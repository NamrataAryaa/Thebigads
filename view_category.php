<?php
include "config.php";

class view {

  function view1() {

    $obj = new connect();
    $conn = $obj->createcon();
    $sql = "SELECT * FROM categories";
    $result = $obj->execute($conn,$sql);
    $obj->destroycon($conn);
    return $result;

   }
}
?>