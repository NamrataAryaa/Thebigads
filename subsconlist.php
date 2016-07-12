<?php

class subsview {
	function subsview1() {

       include "../class/subslistclass.php";
       $obj = new subscriptionList();
       $res = $obj->subslist(NULL);
       return $res;
    }
}

?>