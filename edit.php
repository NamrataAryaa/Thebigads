<?php
include "config.php";

class edit {



function edition($cn,$cs,$ck,$id) {

   $obj = new connect();

   $conn = $obj->createcon();

   $sql = "UPDATE categories SET CategoryName='".$cn."', CategorySlug='".$cs."',  CategoryKeyword='".$cs."' where Id=".$id;

   $obj->execute($conn,$sql);

   $obj->destroycon($conn);

}

}


?>