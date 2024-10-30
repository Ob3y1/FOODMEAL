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
    <link rel="stylesheet" href="users.css">
</head>

<body>
    <header>
        <h2><a href="#" class="logo"><span> Food </span>Meal</a></h2>
        <ul>
            <li><a href="Uhome.php" style="    background: darkorange;">Home</a></li>
            <li><a href="basket.php">Basket</a></li>
            <li><a href="Uabout.html">About</a></li>
        </ul>
    </header>
    <div class="scroll-bg" style="  position: absolute; background: transparent; margin: 10px 0px 0px 0px;">
        <div class="scroll-div"
            style="    position: relative; width: 100%; background:transparent; height: 692px;overflow: hidden; overflow-y: scroll; margin: 0px;">
            <div class='gri'>
            <?php
                            $sql="SELECT `ID`, `name`, `de_img` FROM `department` WHERE 1";
                            $res=$db->query($sql);
                            foreach($res as $row){
                            echo"
                <div class='info'>
                    <a href='Uproduct.php? id=$row[name]'>
                        <img src='$row[de_img]'>
                        <div class='caption'>
                            <h4 style='color: white;  margin-top:130px; font-size: 25px;'>$row[name]</h4>
                        </div>
                    </a>
                </div>";    } ?>
            </div>
        </div>
    </div>
</body>

</html>