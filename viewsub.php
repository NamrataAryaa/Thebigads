<?php

include "../class/viewsubcategory.php";
class subcategoryv {

  function view() {

    $objview = new subcategoryview();

    $res = $objview->view2();

    return $res;

   }

}

?>

