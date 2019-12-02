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
    <link rel="stylesheet" href="css/<?= $_SESSION['data']['vcardstyle'] ?>">


</head>

<body>
    <!-- 彈性盒 -->
    <div class="main">
        <span class="bgName"><?= $_SESSION['data']['name'] ?></span>
        <div class="d-flex">
            <div class="box pic">
                <!-- 圖片 -->
                <img src="img_upload/<?= $_SESSION['data']['pic'] ?>">
                <!-- 名字 -->
                <div class="name">
                    <span class="item">ABOUT.</span>
                    <span class="abName"><?= $_SESSION['data']['name'] ?></span>
                </div>
            </div>
            <div class="text">
                <!-- 個人資料 -->
                <span class="item">Occupation.</span><br>
                <span class="content"><?= $_SESSION['data']['job'] ?></span>
                <br>
                <span class="item">Mobile.</span><br>
                <span class="content"><?= $_SESSION['data']['phoneNum'] ?></span>
                <br>
                <span class="item">E-mail.</span><br>
                <span class="content"><a href="mailto:<?= $_SESSION['data']['mail'] ?>"><?= $_SESSION['data']['mail'] ?></a></span>
                <br>
                <span class="item">Ability.</span><br>
                <span class="content"><?= $_SESSION['data']['skills'] ?></span>
            </div>
        </div>
    </div>
</body>

</html>