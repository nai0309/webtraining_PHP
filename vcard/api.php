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
    //把$_POST存入變數，$_SESSION才抓得到['pic']
    $tmp=$_POST;
    $tmp['pic']=time()."-".$_FILES['pic']['name'];

    session_start();
    $_SESSION['data']=$tmp;
    // print_r($_SESSION);
    // echo "<hr>";
    // print_r($_SESSION['data']['vcardstyle']);
    // echo "<hr>";
    // print_r($_POST);
    // echo "<hr>";
    // print_r($_FILES);
    if($_SESSION['data']['vcardstyle']!="randColor.php"){
        header("location:preview.php");
    }else{
        header("location:randColor.php");
    }
    // session_unset();
    
    ?>
    <!-- <img src="img_upload/<?= time() ?>-<?= $_FILES['pic']['name'] ?>" width="300px"> -->
</body>

</html>