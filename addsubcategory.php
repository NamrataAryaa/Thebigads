<?php
include "config.php";

class addsubcategory{

  function add($id,$catname,$catslug,$catkey) {

    $obj=new connect();

    $conn=$obj->createcon();

    $sql = "INSERT INTO thebigads.subcategory(cid,sname,sslug,skey) VALUES(".$id.",'".$catname."','".$catslug."','".$catkey."')";

   $obj->execute($conn,$sql);

   $obj->destroycon($conn);

   }
}


?>