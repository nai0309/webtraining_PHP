<!-- <h1>這是1_mdy.php</h1> -->

<?php
if (!empty($_POST)) { //POST有值才做{}，同等於表單提交之後的處理{}
    //print_r($_POST);
    $sql="UPDATE ch8_animal SET name='".$_POST['name']."', weight=".$_POST['weight'].", info='".$_POST['info']."', date=NOW() WHERE id=".$_POST['id'];
    $db->query($sql);
   header("location:?page=v1_show");
}
?>


<div style="width:50vw; margin:20px auto; background:#eee; text-align:center; padding:10px;">
    <h1>修改動物資料 Ver1</h1>
    <form action="" method="post">
        <h3>指定編號</h3>
        <p><input type="number" name="id"></p>
        <h3>動物名稱</h3>
        <p><input type="text" name="name"></p>
        <h3>重量</h3>
        <p><input type="number" name="weight"></p>
        <h3>介紹</h3>
        <p><textarea name="info" cols="30" rows="10" style="width:50%"></textarea></p>
        <p>
            <input type="submit" value="修改">
            <input type="reset" value="重置">
        </p>
    </form>
</div>
