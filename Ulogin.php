<?php  
session_start();
require_once 'connect.php';
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password1=$_POST['password'];
    $sql="SELECT `ID` FROM `u_info` WHERE `User_name`='$username' AND `password`='$password1'";
    $res=$db->query($sql);
    $sq="SELECT COUNT(ID) FROM `u_info` WHERE `User_name`='$username' AND `password`='$password1'";
    $re=$db->query($sq);      
    foreach($re as $u)
    {   if($u[0]!= 0){
            foreach($res as $i)
            {    if($i[0]==='1'){
                header('location:Ahome.php');
                }   
                else{
                    $_SESSION['id1']=$i[0];
                    header('location:Uafterlogin.html');
                }
            }
        }
        else{
             header('location:Ucreate.html'); 
        }
    }
}
    
