<?php
include "config.php";

class delete {



function deletion($name) {

   $obj = new connect();

   $conn = $obj->createcon();

   $sql = "DELETE FROM thebigads.subcategory where sname=".$name ;

   $obj->execute($conn,$sql);

   $obj->destroycon($conn);

}

}


?>