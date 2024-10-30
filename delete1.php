<?php
include 'connect.php';
$id1=$_GET['id'];
$sql="DELETE FROM `product` WHERE `ID`=$id1";
$res=$db->query($sql);
header('location:Aproduct.php');
?>