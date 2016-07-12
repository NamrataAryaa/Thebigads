<?php
include "config.php";


$des=$_POST["des"];
$cost=$_POST["cost"];
$contact=
$_POST["con"];
$sname=$_POST["sub"];

$target_Folder = "image/";

$file_name = $_FILES['file_1']['name'];
            
$file_tmp =$_FILES['file_1']['tmp_name'];
           
$file_ext=strtolower(end(explode('.',$_FILES['file_1']['name'])));

$path="../image/".$file_name;
move_uploaded_file($file_tmp,$path);
$obj=new connect();

$conn=$obj->createcon();
$path="admin/image/".$file_name;
$q="select id from thebigads.subcategory where sname='".$sname."'";



$r=$obj->execute($conn,$q);
$row=$r->fetch_assoc();
$id=$row["id"];

echo $path;


echo  $sql = "INSERT INTO thebigads.ads(sid,descr,cost,contact,image,status) VALUES('".$id."','".$des."','".$cost."','".$contact."','".$path."',1)";

$obj->execute($conn,$sql);

$obj->destroycon($conn);




?>
