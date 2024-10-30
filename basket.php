<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="users.css">
</head>
<body>
    <header>
        <h2><a href="#" class="logo"><span> Food </span>Meal</a></h2>
        <ul>
            <li><a href="Uhome.php">Home</a></li>
            <li><a href="basket.php" style="    background: darkorange;">Basket</a></li>
            <li><a href="Uabout.html">About</a></li>
        </ul>
    </header>
    <center>
        <div class="bas">
           
            <table border=1 style="  border: 1px solid rgb(0, 0, 0);
            border-collapse: collapse; width: 530px; position: relative; margin-left:0px; color: black; ">
            <tr>            
                <th>Name</th>
                <th>Price</th>
                <th width="30px" height="20px">  <img src='img/icons8-ok-48.png' height="40px"></th>
            </tr>
            <?php
            $id1=$_SESSION['id1'];
$sql="SELECT `ID`,`user-id`, `pro-id` FROM `basket` WHERE  `user-id`= '$id1' ";
$res=$db->query($sql);
foreach($res as $row){
    $id5=$row['pro-id'];
    $sq="SELECT `ID`, `name`, `price` FROM `product` WHERE `ID`='$id5' ";
    $re=$db->query($sq);
    foreach($re as $ro){
        echo"
            <tr>
                <td>$ro[name]</td>
                <td>$ro[price]</td>
                <td width='30px' > <a href='Pdelete.php? id=$row[ID]'><img src='img/icons8-cancel-48.png' id='cancel' ></a></td>
            </tr>";
}}?>
            </table>
     
        </div>
    </center>
</body>

</html>