<?php
$db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
date_default_timezone_set('Asia/Taipei');
if(!empty($_GET['page'])) $body=$_GET['page'];
else $body='main';
/*三元運算子寫法
$body=(!empty($_GET['page']))?$_GET['page']:'main';
*/

//把文字A變成文字B，防止別人猜到你的GET直等於網頁檔名稱
switch($body){
    case 'main':
        $myurl='main.php';
    break;
    case 'v1_show':
        $myurl='1_show.php';
    break;
    case 'v1_add':
        $myurl='1_add.php';
    break;
    case 'v1_mdy':
        $myurl='1_mdy.php';
    break;
    case 'v1_del':
        $myurl='1_del.php';
    break;
    case 'v2_crud':
        $myurl='2_crud.php';
    break;
    case 'v3_crud':
    $myurl='3_crud.php';
    break; 
    // default:
    //     $myurl='main.php';
    // break;


}
?>
<!-- <hr> -->
<!-- 
//超連結帶GET 
<a href="?page=test&code=1234">測試連結</a>

<br><br>

//form表單提交，以GET為傳遞方式
<form action="" method="get"></form>
<button type="submit" name="page" value="test">測試按鈕</button>
</form>

//使用JS做轉址並夾帶GET
<button onclick="document.locatio.href='?page=text'">測試按鈕</button>
-->

<button onclick="doucment.location.href=''">回首頁</button>

<form action="" method="get">
    <p>
    <button name="page" value="v1_show">顯示(1)</button>
    <button name="page" value="v1_add">新增(1)</button>
    <button name="page" value="v1_mdy">修改(1)</button>
    <button name="page" value="v1_del">刪除(1)</button>
    </p>
</form>
<P>
<button onclick="document.location.href='?page=v2_crud'">CRUD(2)</button>
</P>
<P>
<button onclick="document.location.href='?page=v3_crud'">CRUD(3)</button>
</P>



<hr>
<?php
//$db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
include($myurl);
?>