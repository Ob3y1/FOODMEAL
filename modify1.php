<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Edit</title>
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
        <a href="Aproduct.php" class="logout_btn">Back</a>
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
        <div id="div2"style="height: 530px;">
            <div id="div3">
            <?php
include 'connect.php';
$id1=$_GET['id'];
$sql="SELECT `ID`, `name`, `price`, `name_department`, `pro_img` FROM `product` WHERE`ID`=$id1";
$res=$db->query($sql);
foreach($res as $row )
{
echo"

                <p style=' margin-left: 35px;'><b> Edit Product</b></p>
                <form action='modify2.php' method='post' name='form_insert' id='insert'enctype='multipart/form-data'>
                 <label>ID</label>  <input type='number' name='ID' value='$row[ID]' readonly id=''><br>

                    <label for='input_name'>Name</label><br> <input type='text' name='pro_name' placeholder='name'
                        id='input_name'  value='$row[name]' required><br>
                    <label for='input_price'>Price </label><br><input type='text' name='pro_price'
                        placeholder='price' id='input_price'  value='$row[price]' required><br>
                        <label for='n_dep'>N_Part</label><br><input type='text' name='n_dep'
                        placeholder='Name_Part' id='n_dep'  value='$row[name_department]' required><br>
                    <label for='input_photo'>Photo </label><input type='file' name='pro_image' placeholder='photo'
                        id='input_photo' class='upload-box' value='$row[pro_img]' required><br>
                    <button type='submit' name='insert' id='button_insert'> UPDATE </button>
                </form>";}?>
            </div>
        </div>
</body>

    </html>