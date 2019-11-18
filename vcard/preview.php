<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="<?= $_SESSION['data']['vcardstyle'] ?>.css">  -->
    <style>
        * {
            font-family: 'Lato', sans-serif;
        }

        body {
            background-image: url("img_upload/1573735195-Cornsilk-Forest-Fall-Desktop-Wallpaper-2-1440x810.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .box {
            width: 600px;
            height: 500px;
            background-color: rgba(255, 255, 255, 0.95);
            position: absolute;
        }

        .center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .pic {
            width: 300px;
            height: 500px;
            float: left;
            position: relative;
        }

        .pic img {
            width: 250px;
            height: 250px;
            position: absolute;
            top: 125px;
            left: 20px;
            background-size: cover;
            border: 5px solid white;
            border-radius: 125px;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5)
        }

        .content {
            width: 300px;
            height: 500px;
            float: right;
            box-sizing: border-box;
            padding: 125px 10px 40px 10px;
            word-wrap: break-word;
            margin: 0px;
        }

        .margin {
            margin: 0px;
        }
    </style>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    ?>
    <!-- 中間資料大box -->
    <div class="box center">
        <!-- 圖片box left-->
        <div class="pic">
            <img src="img_upload/me.jpg">
        </div>
        <!-- 個人資料box right -->
        <div class="content">
            <h1 class="margin"><?= $_SESSION['data']['name'] ?></h1>
            <h3 class="margin"><?= $_SESSION['data']['job'] ?></h3>
            <p class="margin">
                Mobile：<?= $_SESSION['data']['phoneNum'] ?>
            </p>
            E-mail：<?= $_SESSION['data']['mail'] ?>
            <p class="margin">
                <?= $_SESSION['data']['skills'] ?>
            </p>
        </div>

    </div>

</body>

</html>