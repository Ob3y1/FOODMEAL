<?php
require_once 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sittings</title>
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
      
            <div id="div2" style=" height: 380px;">
                <div id="allimg" style="  margin-left: 100px;      background-color:#221d46;" >
                    <center> <img src="img/icons8-source-code-50.png"> </center>
                </div><?php
                $sql="SELECT `ID`, `User_name`, `password` FROM `u_info` WHERE  `ID`=1";
                $res=$db->query($sql);
                foreach($res as $row )
                {
                echo"
                <div id='div3' style=' margin-top: 20px;'>
                    <p style=' margin-left: 10px;'><b>Change The Data</b></p>
                    <form action='modifysittings.php' method='post'>
                        <label>User name </label><br>
                        <input type='text' value='$row[User_name]' name='username' required><br>
                        <label>Password </label><br>
                        <input type='password' value='$row[password]' name='password' required id='input1'><span id='all-span'  style=' margin-left: -30px;' onclick='myfunction()'><img id='hide1'
                            src='img/icons8-eye-64.png' height='18px' width='18px'><img id='hide2' src='img/icons8-private-lock-60.png' height='18px' width='18px'></span><br>
                        <button type='submit' name='Login' style='margin-top: 20px; margin-left: 20px; '><b>Save</b></button><br>
                        <button type='reset'  style=' margin-left: 20px;'><b>Reset</b></button>
                    </form>
                </div>";} ?> 
            </div>
       
    </div>
</body>
<script>function myfunction() {
    var x = document.getElementById("input1");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");
    if (x.type === 'password') {
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
    }
    else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}</script>
</html>