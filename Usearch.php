<?php
require_once 'connect.php';
?>
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
        <div class="right_area">
            <div id="a1" style="    margin-right: 0px;">
                <a href="Uhome.php"><img src="img/icons8-forward-arrow-60.png" id="img2" style=" width: 50px;
    height: 40px;     margin-top: -5px;
  border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;"></a>
            </div>
            <a href="basket.php"><img src="img/icons8-shopping-cart-64.png" id="img5" style="margin-right: 100px;"></a>
        </div>
    </header>
   
    <div class="scroll-bg" style="  position: absolute; background: transparent; margin: 10px 0px 0px 0px;">
        <div class="scroll-div"
            style="    position: relative; width: 100%; background:transparent; height: 692px;overflow: hidden; overflow-y: scroll; margin: 0px;">
            <div class='grid-container'>
            <?php
             $name=$_POST['inp1'];   
    $sql="SELECT `ID`, `name`, `price`, `name_department`, `pro_img` FROM `product` WHERE `name`='$name'";
    $res=$db->query($sql);
    foreach($res as $row){
    echo"
                <div class='grid-item' id='gg'>
                    <img src='$row[pro_img]' id='img3'>
                    <div id='h53'>
                        <div style='margin-top=5px;'>$row[name]</div>
                        <div id='h51'> <a href='buy.php? id=$row[ID]'
                                class='closebtn'> $row[price] </a></div>
                    </div>
                </div>
        ";}?>  
            </div>
        </div>
    </div>
</body>

</html>
