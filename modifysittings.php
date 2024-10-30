<?php
require_once 'connect.php';
$name=$_POST['username'];
$password=$_POST['password'];
$sql = " UPDATE `u_info` SET `User_name`='$name',`password`='$password' WHERE `ID`=1 ";
$res=$db->query($sql);
header('location:Asittings.php');
?>