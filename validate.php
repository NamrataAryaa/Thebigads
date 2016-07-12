<?php

class validation {

	function validate($uid,$up) {

		$myfile = fopen("http://localhost/test/fileid/file1.txt", "r") or die("Unable to open file!");
  
    $members = array();

    while (!feof($myfile)) {
      $members[] = rtrim(end(explode(':', (fgets($myfile)))));
    }

    if (($uid==$members[0]) && ($up==$members[1]))  {
    
      session_start();

      $_SESSION["username"] = $uid;
      $_SESSION["password"] = $up;
      header("location:http://localhost/test/thebigads/admin/views/dashboard.php");
 
    }
     else {
 
      echo "<p id='p1'>Wrong username and password combination</p>";
     }

	}
}

?>
