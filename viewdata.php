<?php

include "../class/view_category.php";

class viewcon {

  function record() {
     $objview = new view();

     $res = $objview->view1();

     return $res;

    }

}

?>

