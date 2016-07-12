<?php


class searchsubs {
	function search($n) {

      include "../class/subslistclass.php";
      $obj = new subscriptionList();
      $res = $obj->subslist($n);
      return $res;
    }
}
?>