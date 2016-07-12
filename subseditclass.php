<?php

include "config.php";

class subscriptionEdit {

	function subsedit($sn,$dur,$na,$price,$e,$id) {

		$obj = new connect();

		$conn = $obj->createcon();

		$sql ="UPDATE subscription set subName='".$sn."' , duration= '".$dur."' , ads='".$na."' ,  price='".$price."' ,  status='".$e."'   where subId=".$id;

		$obj->execute($conn,$sql);

		$obj->destroycon($conn);
	}
}

?>