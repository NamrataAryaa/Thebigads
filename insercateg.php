<?php
include "config.php";

class insert {



function insertion($catname,$catslug,$catkey) {

    $obj = new connect();

    $conn = $obj->createcon();

    $sql = "INSERT INTO categories(categoryName,categorySlug,categoryKeyword) VALUES('".$catname."','".$catslug."','".$catkey."')";

    $obj->execute($conn,$sql);

    $obj->destroycon($conn);

}

}


?>