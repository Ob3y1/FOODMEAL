<?php
session_start();
require_once 'connect.php';
$id1=$_SESSION['id1'];
$id2=$_GET['id'];
$sql="INSERT INTO `basket`(`ID`, `user-id`, `pro-id`) VALUES (NULL,'$id1','$id2')";
$res=$db->query($sql);
header('location:basket.php');
?>