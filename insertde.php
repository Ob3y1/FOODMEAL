<?php
include('connect1.php');
if(isset($_POST['insert'])){
$name=$_POST['pro_name'];
$image=$_FILES['pro_image'];
$fileTmpName = $_FILES ['pro_image' ] ['tmp_name' ] ;
$fileName = $_FILES ['pro_image' ] ['name' ] ;
$uploadDairectory = "image/".$fileName;

move_uploaded_file ( $fileTmpName,'image/'.$fileName);
$sql="INSERT INTO `department`(`ID`, `name`, `de_img`) VALUES (NULL,'$name','$uploadDairectory')";
mysqli_query($con,$sql);
header('location:Adepartment.php');
}
?>