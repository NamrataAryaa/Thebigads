<?php

include "config.php";

class subscriptionList
{

	function subslist($name) {
	    $obj=new connect();

        $conn=$obj->createcon();

        if($name==NULL) {
     
          $sql = "SELECT * FROM subscription ";
        }
         else {
     
            $sql = "SELECT * FROM subscription where subName='".$name."'";
         }


        $r=$obj->execute($conn,$sql);

        $obj->destroycon($conn);
        return $r;
    }
}

?>