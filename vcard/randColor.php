<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    session_start();
    ?>

    <title><?= $_SESSION['data']['name'] ?>_Vcard</title>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Dancing+Script&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- css reset -->
    <link rel="stylesheet" href="css/reset.css" />
    <!-- css樣式 -->
    <link rel="stylesheet" href="css/randColor.css">


</head>
<?php
$bgCol = "rgb(" . rand(150, 255) . "," . rand(150, 255) . "," . rand(150, 255) . ")";
$picBorder = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
$itemCol = "rgb(" . rand(0, 150) . "," . rand(0, 150) . "," . rand(0, 150) . ")";

$rand = rand(1, 9);
if ($rand < 4) {
    $borderStyle = 'solid';
} elseif ($rand < 7) {
    $borderStyle = 'dotted';
} else {
    $borderStyle = 'dashed';
}

// background color
echo '<body style="background:' . $bgCol . '">';
?>
<div class="container">
    <!-- 彈性盒 -->
    <div class="main row vh-100 d-flex justify-content-center align-items-center">
        <!-- 背景文字 -->
        <span class="bgName"><?= $_SESSION['data']['name'] ?></span>
        <div class="row h-75 align-items-end">
            <div class="col-12 col-md-6 box pic">
                <!-- 圖片 -->
                <img src="img_upload/<?= $_SESSION['data']['pic'] ?>">
                <!-- 名字 -->
                <div class="name">
                    <?php
                    echo '<span class="item" style="color:' . $itemCol . '">ABOUT.</span>';
                    ?>
                    <span class="item"></span>
                    <span class="abName"><?= $_SESSION['data']['name'] ?></span>
                </div>
                <?php
                echo '<div class="picBack" style="border: 5px ' . $borderStyle . ' ' . $picBorder . ';"></div>';
                ?>
            </div>
            <div class="col-12 col-md-6 text mt-5 mt-md-0">
                <!-- 個人資料 -->
                <?php
                echo '<span class="item" style="color:' . $itemCol . '">Occupation.</span><br>';
                ?>
                <span class="content"><?= $_SESSION['data']['job'] ?></span>
                <br>
                <?php
                echo '<span class="item" style="color:' . $itemCol . '">Mobile.</span><br>';
                ?>
                <span class="content"><?= $_SESSION['data']['phoneNum'] ?></span>
                <br>
                <?php
                echo '<span class="item" style="color:' . $itemCol . '">E-mail.</span><br>';
                ?>
                <span class="content"><a href="mailto:<?= $_SESSION['data']['mail'] ?>"><?= $_SESSION['data']['mail'] ?></a></span>
                <br>
                <?php
                echo '<span class="item" style="color:' . $itemCol . '">Ability.</span><br>';
                ?>
                <span class="content"><?= $_SESSION['data']['skills'] ?></span>
            </div>
            <div class="col h-25 d-flex justify-content-center align-items-start px-0">
                <button onclick="window.history.go(-1)" class="btn btn-dark btn-sm">回頁面</button>
            </div>
        </div>
    </div>
</div>

<?php
echo '</body>';
?>

</html>