<?php  
require_once 'connect.php';
if(isset($_POST['create'])){
$username=$_POST['User_name'];
$password1=$_POST['password'];
$sql="SELECT COUNT(ID) FROM `u_info` WHERE `User_name`='$username' AND `password`='$password1'";
$res=$db->query($sql);
foreach($res as $i)
{    if($i[0]!=0)
    {
echo"you already have an account";
}
else
{    if($_POST['password']!=$_POST['confirmpassword'])
    header('location:Ucreate.html');
   else if($_POST['password']===$_POST['confirmpassword']){ 
    $sq="INSERT INTO `u_info`(`ID`, `User_name`, `password`, `email`, `birth_date`, `Role`) VALUES (NULL,'".$_POST['User_name']."','".$_POST['password']."','".$_POST['email']."','".$_POST['b_date']."','User')";
    $re=$db->query($sq);
    header('location:Ulogin.html');
}
}}}
?>