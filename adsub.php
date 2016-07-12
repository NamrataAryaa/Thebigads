<?php
include "config.php";

class add {



   function add1($d,$na,$pr,$e,$name) {

   $obj=new connect();

   $conn=$obj->createcon();

   echo $sql = "INSERT INTO thebigads.subscription(duration,ads,price,status,subName) VALUES('".$d."','".$na."','".$pr."','".$e."','".$name."')";

   $obj->execute($conn,$sql);

   $obj->destroycon($conn);

   }
}


?>
