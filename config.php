<?php
 

 class connect {

    function createcon() {
 
        $conn = mysqli_connect("localhost","root","root","thebigads");

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
         else return $conn;
    }
    function destroycon($conn) {

	   mysqli_close($conn);
    }

   function execute($conn,$sql) {

	 return mysqli_query($conn,$sql);

    }
}

?>