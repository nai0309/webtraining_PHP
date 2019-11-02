<?php

if(!empty($_POST)){
    $sql="UPDATE ch8_animal SET name='".$_POST['name']."', weight='".$_POST['weight']."', info='".$_POST['info']."', date=NOW() WHERE id=".$_POST['id'];
    $db->query($sql);
    header("location:?page=v2_crud");
}
$sql="SELECT * FROM ch8_animal WHERE id=".$_GET['mdy'];
//print_r($sql);
$row=$db->query($sql)->fetch();


?>

<div style="width:50vw; margin:20px auto; background:#eee; text-align:center; padding:10px;">
    <h1>修改動物資料 Ver1</h1>
    <form method="post">
        <h3>編號<?=$row['id']?></h3>
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <h3>動物名稱</h3>
        <p><input type="text" name="name" value="<?=$row['name']?>"></p>
        <h3>重量</h3>
        <p><input type="number" name="weight" value="<?=$row['weight']?>"></p>
        <h3>介紹</h3>
        <p><textarea name="info" cols="30" rows="10" style="width:50%"><?=$row['info']?></textarea></p>
        <p>
            <input type="submit" value="修改">
            <input type="reset" value="重置">
        </p>
    </form>
</div>
