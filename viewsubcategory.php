<?php
include "config.php";

class subcategoryview{

  function view2() {

    $obj = new connect();

    $conn = $obj->createcon();

    $sql = "SELECT * FROM subcategory";

    $result = $obj->execute($conn,$sql);

    $obj->destroycon($conn);

    return $result;

  }


}


?>