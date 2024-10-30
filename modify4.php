<?php
include 'connect.php';
$name=$_POST['pro_name'];
$image=$_FILES['pro_image'];
$fileTmpName = $_FILES ['pro_image' ] ['tmp_name' ] ;
$fileName = $_FILES ['pro_image' ] ['name' ] ;
$uploadDairectory = "image/".$fileName;

move_uploaded_file ( $fileTmpName,'image/'.$fileName);
$sql = " UPDATE `department` SET `name`='$name',`de_img`='$uploadDairectory' WHERE `ID`= '".$_POST['ID']."' ";
mysqli_query($con,$sql);
$res=$db->query($sql);
header('location:Adepartment.php');
?>