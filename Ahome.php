<?php
require_once 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Food <span>Meal</span></h3>
        </div>
    <div class="right_area">
        <a href="Ulogin.html" class="logout_btn">Logout</a>
    </div>
    </header>
    <div class="sidebar">
        <a href="Ahome.php"><i class="fa fa-home fa-fw"></i><span>Home</span></a>
        <a href="Aproduct.php"><i class="fas fa-table"></i><span>Product</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Department</span></a>
        <a href="Ausers.php"><i class="fa fa-user fa-fw"></i><span>Users</span></a>
        <a href="Asittings.php"><i class="fas fa-sliders-h"></i><span>Sittings</span></a>
        <div id="pictur">
            <img src="img/icons8-whatsapp-32.png"><span>+963964925100</span><br>
            <img src="img/icons8-instagram-32.png"><span>obay_mw</span><br>
            <img src="img/icons8-facebook-30.png"><span>obay mo</span><br>
        </div>
    </div>
   
    <div class="content">
    <?php
    $sql="SELECT COUNT(ID) FROM `basket` WHERE 1";
    $res=$db->query($sql);
    foreach($res as $row){
    echo"
        <div id='su'>
            <div id='sales'>
                <center>
                    <p>Number of sales :</p>
                    <hr>
                    <h2>$row[0]</h2>
                </center>
            </div>";}
            $sql="SELECT COUNT(ID) FROM `u_info` WHERE 1";
            $res=$db->query($sql);
            foreach($res as $row){
                echo"
            <div id='users'>
                <center>
                    <p>Number of users :</p>
                    <hr>
                    <h2>$row[0]</h2>
                </center>
            </div>
        </div>";}
        $sql="SELECT COUNT(ID) FROM `product` WHERE 1";
        $res=$db->query($sql);
        foreach($res as $row){
            echo"
        <div id='pd'>
            <div id='product'>
                <center>
                    <p>Number of foods :</p>
                    <hr>
                    <h2>$row[0]</h2>
                </center>
            </div>";}
            $sql="SELECT COUNT(ID) FROM `department` WHERE 1";
            $res=$db->query($sql);
            foreach($res as $row){
                echo"
            <div id='department'>
                <center>
                    <p>Number of parts :</p>
                    <hr>
                    <h2>$row[0]</h2>
                </center>
            </div>
        </div>
    </div> ";}  ?>
</body>

</html>