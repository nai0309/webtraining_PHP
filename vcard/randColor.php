<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    session_start();
    ?>

    <title><?= $_SESSION['data']['name'] ?>_Vcard</title>

    <!-- google font -->    
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Dancing+Script&display=swap" rel="stylesheet">
        <!-- css reset -->
    <link rel="stylesheet" href="css/reset.css" />
    <!-- css樣式 -->
    <link rel="stylesheet" href="css/randColor.css">


</head>
<?php
$bgCol = "rgb(" . rand(150, 255) . "," . rand(150, 255) . "," . rand(150, 255) . ")";
$picBorder = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
$itemCol = "rgb(" . rand(0, 150) . "," . rand(0, 150) . "," . rand(0, 150) . ")";

$rand=rand(1,9);
if($rand<4){$borderStyle='solid';}
elseif($rand<7){$borderStyle='dotted';}
else{$borderStyle='dashed';}

// background color
echo '<body style="background:'.$bgCol.'">';
?>

    <!-- 彈性盒 -->
    <div class="main">
        <span class="bgName"><?= $_SESSION['data']['name'] ?></span>
        <div class="d-flex">
            <div class="box pic">
                <!-- 圖片 -->
                <img src="img_upload/<?= $_SESSION['data']['pic'] ?>">
                <!-- 名字 -->
                <div class="name">
                <?php
                echo '<span class="item" style="color:'.$itemCol.'">ABOUT.</span>';
                ?>
                    <span class="item"></span>
                    <span class="abName"><?= $_SESSION['data']['name'] ?></span>
                </div>
                <?php
               echo '<div class="picBack" style="border: 5px '.$borderStyle.' '.$picBorder.';"></div>';
               ?>
            </div>
            
            <div class="text">
                <!-- 個人資料 -->
                <?php
                echo '<span class="item" style="color:'.$itemCol.'">Occupation.</span><br>';
                ?>
                <span class="content"><?= $_SESSION['data']['job'] ?></span>
                <br>
                <?php
                echo '<span class="item" style="color:'.$itemCol.'">Mobile.</span><br>';
                ?>
                <span class="content"><?= $_SESSION['data']['phoneNum'] ?></span>
                <br>
                <?php
                echo '<span class="item" style="color:'.$itemCol.'">E-mail.</span><br>';
                ?>
                <span class="content"><a href="mailto:<?= $_SESSION['data']['mail'] ?>"><?= $_SESSION['data']['mail'] ?></a></span>
                <br>
                <?php
                echo '<span class="item" style="color:'.$itemCol.'">Ability.</span><br>';
                ?>
                <span class="content"><?= $_SESSION['data']['skills'] ?></span>
            </div>
        </div>
    </div>
<?php
echo '</body>';
?>
</html>