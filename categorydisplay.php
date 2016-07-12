<?php
include "config.php";



class display{

   function dynamicdisplay() {
      $obj = new connect();

      $conn = $obj->createcon();

      $sql = "SELECT Id,CategoryName FROM categories order by CategoryName ";

      $result=$obj->execute($conn,$sql);

      $obj->destroycon($conn);

      return $result;
    }

function dynamicdisplaysub($id) {

   $obj = new connect();

   $conn = $obj->createcon();

   $sql = "SELECT sname FROM subcategory where cid=".$id;

   $result = $obj->execute($conn,$sql);

   $obj->destroycon($conn);

   return $result;
}

}




?>