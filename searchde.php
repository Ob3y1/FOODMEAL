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
        <a href="Adepartment.php" class="logout_btn">Back</a>
        </div>
    </header>
    <div class="sidebar">
        <a href="Ahome.php"><i class="fa fa-home fa-fw"></i><span>Home</span></a>
        <a href="Aproduct.php"><i class="fas fa-table"></i><span>Product</span></a>
        <a href="Adepartment.php"><i class="fas fa-th"></i><span>Department</span></a>
        <a href="Ausers.php"><i class="fa fa-user fa-fw"></i><span>Users</span></a>
        <a href="Asittings.php"><i class="fas fa-sliders-h"></i><span>Sittings</span></a>
        <div id="pictur">
            <img src="img/icons8-whatsapp-32.png"><span>+963964925100</span><br>
            <img src="img/icons8-instagram-32.png"><span>obay_mw</span><br>
            <img src="img/icons8-facebook-30.png"><span>obay mo</span><br>
        </div>
    </div>

    <div class='content'>
        <div class="scroll-bg" style="  position: absolute; background: transparent; margin: 70px 0px 0px 600px;">
            <div class="scroll-div" style="    position: relative; width: 100%; background:transparent; height: 690px;overflow: hidden; overflow-y: scroll; margin: 0px;">
                <div class="scroll-object">        
                    <div class='grid-con'>
                        <?php
                            $name=$_POST['inp1'];
                            $sql="SELECT `ID`, `name`, `de_img` FROM `department` WHERE `name`='$name'";
                            $res=$db->query($sql);
                            foreach($res as $row){
                            echo" 
                            <div class='info' style='margin-top: 10px ;'>
                                <img src='$row[de_img]'>
                                <div class='caption'>
                                    <h4 style='color: white;  margin-top: 120px;'>$row[name]</h4>
                                    <div id='demo'style='margin-top: 20px;'>
                                        <a href='delete2.php? id=$row[ID]' id='de'>Delete</a>
                                        <a href='modify3.php? id=$row[ID]' style='margin-left: 15px;' id='mo'>Revise</a>
                                    </div>
                                </div>
                            </div> ";
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>