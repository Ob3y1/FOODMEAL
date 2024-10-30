<?php
require_once 'connect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Search</title>
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
        <a href="Ausers.php" class="logout_btn">Back</a>
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
         <div class="scroll-bg" style="    position: absolute ;  background: transparent;   margin: 70px 0px 50px 190px;">
            <div class="scroll-div" style="    position: relative; width: 1283px; background:transparent; height: 690px; overflow: hidden; overflow-y: scroll;">
                <div class="scroll-object">
                    <table border=1 style="  border: 1px solid rgb(0, 0, 0);
                        border-collapse: collapse;  border-spacing: 0; width: 1283px; position: absolute;">
                        <tr>            
                            <th>ID</th>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>B_date</th>
                            <th>ROLE</th>
                        </tr>   
                        <?php
                            $name=$_POST['inp2'];
                            $sql="SELECT `ID`, `User_name`, `password`, `email`, `birth_date` , `Role` FROM `u_info` WHERE `User_name`='$name'";
                            $res=$db->query($sql);
                            foreach($res as $row){
                            echo"
                            <tr>
                                <td>$row[ID]</td>
                                <td>$row[User_name]</td>
                                <td>$row[password]</td>
                                <td>$row[email]</td>     
                                <td>$row[birth_date]</td>
                                <td>$row[Role]</td>
                            </tr> ";}
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body> 

</html>