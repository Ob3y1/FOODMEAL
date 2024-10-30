<?php
include 'connect.php';
$id1=$_GET['id'];
$sql="DELETE FROM `department`WHERE `ID`=$id1";
$res=$db->query($sql);
header('location:Adepartment.php');
?>