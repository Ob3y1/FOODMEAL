<?php
include('connect1.php');
if(isset($_POST['insert'])){
$name=$_POST['pro_name'];
$price=$_POST['pro_price'];
$image=$_FILES['pro_image'];
$fileTmpName = $_FILES ['pro_image' ] ['tmp_name' ] ;
$fileName = $_FILES ['pro_image' ] ['name' ] ;
$uploadDairectory = "image/".$fileName;

move_uploaded_file ( $fileTmpName,'image/'.$fileName);
$sql="INSERT INTO `product`(`ID`, `name`, `price`, `name_department`, `pro_img`) VALUES (NULL,'$name','$price','".$_POST['n_dep']."','$uploadDairectory')";
mysqli_query($con,$sql);
header('location:Aproduct.php');
}
?>