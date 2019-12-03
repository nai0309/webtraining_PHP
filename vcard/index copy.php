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
    <!-- css reset -->
    <!-- <link rel="stylesheet" href="css/reset.css" /> -->
    <!-- 表格樣式 -->
    <link rel="stylesheet" href="css/style.css" />


</head>

<body class="bg-success">

    <div class="container">
        <div class="row vh-100 vw-75 d-flex justify-content-center align-items-center bg-info">
            <div class="col d-none d-md-block col-md-6 bg-warning h-75 w-25 px-0 flex-grow-0" style="flex:0 1 auto">
                <img src="https://picsum.photos/2000/2000/?random=1" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-6 bg-danger h-75 w-75 d-flex justify-content-center align-items-center flex-grow-0" style="flex:0 1 auto">
                <form action="">
                    <div class="card text-warning mb-3" style="width:100%;height:75%">
                        <h1 class="card-header">vCard產生器</h1>
                        <div class="card-body">
                            <div class="">
                                <!-- 你的名字 -->
                                <label for="exampleInputName">你的名字</label>
                                <input type="text" name="name" value="NaiHui" class="form-control form-control-sm" id="exampleInputName">
                                <!-- 工作職稱 -->
                                <label for="exampleInputJob">工作職稱</label>
                                <input type="text" name="job" value="文案編輯＆菜鳥網頁設計" class="form-control form-control-sm" id="exampleInputJob">
                                <!-- 聯絡電話 -->
                                <label for="exampleInputMobile">聯絡電話</label>
                                <input type="number" name="phoneNum" value="0975123456" class="form-control form-control-sm" id="exampleInputMobile">
                                <!-- 電子信箱 -->
                                <label for="exampleInputEmail">電子信箱</label>
                                <input type="mail" name="mail" value="t301233@gmail.com" class="form-control form-control-sm" id="exampleInputEmail">
                                <!-- 技能簡介 -->
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                                <!-- 人像照片 -->
                                <label for="exampleFormControlFile">人像照片</label>
                                <input type="file" name="pic" class="form-control-file text-danger font-weight-bolder" id="exampleFormControlFile">
                                <!-- 選擇版型 -->
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary">送出預覽</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>