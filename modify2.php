<?php
include 'connect.php';
$name=$_POST['pro_name'];
$price=$_POST['pro_price'];
$dep=$_POST['n_dep'];
$image=$_FILES['pro_image'];
$fileTmpName = $_FILES ['pro_image' ] ['tmp_name' ] ;
$fileName = $_FILES ['pro_image' ] ['name' ] ;
$uploadDairectory = "image/".$fileName;

move_uploaded_file ( $fileTmpName,'image/'.$fileName);
$sql = " UPDATE `product` SET `name`='$name',`price`='$price',`name_department`='$dep' ,`pro_img`='$uploadDairectory' WHERE `ID`= '".$_POST['ID']."' ";
mysqli_query($con,$sql);

$images=$_POST['pro_image'];
$res=$db->query($sql);
header('location:Aproduct.php');
?>