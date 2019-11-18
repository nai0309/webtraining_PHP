<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // print_r($_FILES);

    //處理照片存放
    COPY($_FILES['pic']['tmp_name'], "img_upload/" . time() . "-" . $_FILES['pic']['name']);
    // $tmp=$_POST;
    $tmp['pic']=$_FILES['pic']['name'];

    session_start();
    $_SESSION['data']=$_POST;
    print_r($_SESSION);
    // session_unset();
    // header("location:preview.php");
    ?>
    <!-- <img src="img_upload/<?= time() ?>-<?= $_FILES['pic']['name'] ?>" width="300px"> -->
</body>

</html>