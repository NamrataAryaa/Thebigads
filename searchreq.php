<?php
include "../class/search.php";


class searchdata {

  function searchd($cname) {

    $sobj = new search();
    $result = $sobj->searching($cname);
    return $result;
  }
}

?>