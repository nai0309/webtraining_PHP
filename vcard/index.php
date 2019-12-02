<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vCard產生器</title>

    <!-- 表格樣式 -->
    <link rel="stylesheet" href="css/form-style.css" />
    <!-- css reset -->
    <link rel="stylesheet" href="css/reset.css" />

</head>

<body>
  
    <div class="main">
        <form action="api.php" method="post" enctype="multipart/form-data">
        你的名字 <input type="text" name="name" value="NaiHui" size="20"><br><br>
        工作職稱 <input type="text" name="job" value="文案編輯＆菜鳥網頁設計" size="20"><br><br>
        聯絡電話 <input type="number" name="phoneNum" value="0975123456" size="20"><br><br>
        電子信箱 <input type="mail" name="mail" value="t301233@gmail.com" size="20"><br><br>
        技能簡介 <textarea name="skills" cols="30" rows="10" width="50%">熟悉關鍵字廣告操作</textarea><br><br>
        人像照片 <input type="file" name="pic"><br><br>
        選擇版型 <select name="vcardstyle">
            <option value="pink.css" selected>微甜少女粉</option>
            <option value="coder.css">尬電coder風</option>
            <option value="black&white.css">高冷簡約風</option>
            <option value="randColor.php">選擇障礙隨機配色</option>
        </select>
        <br><br>
        <input type="submit" value="送出預覽">
        </form>


    </div>

</body>

</html>