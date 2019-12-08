<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vCard產生器</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <style>
        body {
            background-image: url("image/FormBg.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.75rem;
            color: #3f6b50;
            font-weight: 900;
            background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
            opacity: 0.9;
        }
            </style>
</head>

<body>

    <div class="container-fluid">
        <form action="api.php" method="post" enctype="multipart/form-data">
            <div class="row vh-100 vw-100 d-flex justify-content-center align-items-center flex-column">
                <div class="col d-flex justify-content-center align-items-center flex-nowrap">
                    <div class="card mb-3">
                        <h1 class="card-header text-center">vCard產生器</h1>
                        <div class="card-body">
                            <!-- 你的名字 -->
                            <label for="InputName">你的名字</label>
                            <input type="text" name="name" value="NaiHui" class="form-control form-control-sm" id="InputName">
                            <!-- 工作職稱 -->
                            <label for="InputJob">工作職稱</label>
                            <input type="text" name="job" value="文案編輯＆菜鳥網頁設計" class="form-control form-control-sm" id="InputJob">
                            <!-- 聯絡電話 -->
                            <label for="InputMobile">聯絡電話</label>
                            <input type="text" name="phoneNum" value="0975123456" class="form-control form-control-sm" id="InputMobile">
                            <!-- 電子信箱 -->
                            <label for="InputEmail">電子信箱</label>
                            <input type="mail" name="mail" value="t301233@gmail.com" class="form-control form-control-sm" id="InputEmail">
                            <!-- 技能簡介 -->
                            <label for="FormControlSkills">技能簡介</label>
                            <textarea class="form-control" id="FormControlSkills" name="skills">熟悉服飾、旅遊、美妝保養、家電、食品等廣告文案撰寫</textarea>
                            <!-- 選擇版型 -->
                            選擇版型<select class="form-control form-control-sm mt-2" name="vcardstyle">
                                <option value="pink.css" selected>微甜少女風</option>
                                <option value="coder.css">尬電coder風</option>
                                <option value="black&white.css">高冷簡約風</option>
                                <option value="randColor.php">選擇障礙隨機配色</option>
                            </select>
                            <!-- 人像照片 -->
                            <label for="FormControlFile">人像照片</label>
                            <input type="file" name="pic" class="form-control-file text-dark font-weight-bolder" id="FormControlFile">
                            <br>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-warning text-white font-weight-bolder">送出預覽</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col footer bg-white d-flex justify-content-center align-items-end flex-grow-0">Copyright © 2019 NaiHui</div>

            </div>
        </form>

    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>