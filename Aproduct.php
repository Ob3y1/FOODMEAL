<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Product</title>
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
            <div id="a1">
            <form action="search.php" method="post">
                <button type="submit" name="name" id="buttonsearch"><img src="img/icons8-magnifier-67.png" id="img1"></button>
                <input type="text" id="inp1" name="inp1" placeholder="NAME_PRODUCT">
            </form>
                <a href="insertpro.html"><img src="img/icons8-plus-67.png" id="img2"></a>
            </div>
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
        <div class='grid-container'>
        <?php
    $sql="SELECT `ID`, `name`, `price`, `name_department`, `pro_img` FROM `product` WHERE 1";
    $res=$db->query($sql);
    foreach($res as $row){
    echo"
            <div class='grid-item'>
                <img src='$row[pro_img]'  id='img3'>
                <center>
                    <h2 id='h21'>$row[name]</h2>
                </center>
                <hr>
                <div id='h53'>
                    <div>$row[price]</div>
                    <div id='h51'>$row[name_department]</div>
                </div>
                <center>
                    <div id='id'><b id='b1'>$row[ID]</b></div>
                </center><div id='demo'>
                <a href='delete1.php? id=$row[ID]' id='de'>Delete</a>
                <a href='modify1.php? id=$row[ID]' id='mo'>Revise</a></div>
            </div>  ";
         }
            ?></div>
    </div>
</body>

</html>