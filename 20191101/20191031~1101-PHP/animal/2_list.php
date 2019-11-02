<?php

if(!empty($_GET['del'])){
    $sql="DELETE FROM ch8_animal WHERE id=".$_GET['del'];
    $db->query($sql);
   header("location:?page=v2_crud");
}
//for new insert
if(!empty($_POST)){
    $sql="INSERT INTO ch8_animal VALUES(NULL,'".$_POST['name']."',".$_POST['weight'].",'".$_POST['info']."',NOW())";
    $db->query($sql);
    header("location:?page=v2_crud");
}

//放IF後面新增完馬上會列表
$sql="SELECT * FROM ch8_animal WHERE 1"; //for select to list
$rows=$db->query($sql)->fetchAll();


?>
<table width="100%">
    <tr>
        <td>編號</td>
        <td>動物名稱</td>
        <td>重量</td>
        <td>簡介</td>
        <td>更新日期</td>
        <td>操作</td>
    </tr>
    <tr><td colspan="6"><hr></td></tr>
<form method="post">
    <tr>
        <td>#</td>
        <td><input type="text" name="name"></td>
        <td><input type="number" name="weight"></td>
        <td><input type="text" name="info"></td>
        <td><?=date("Y-m-d H:i:s")?></td>
        <td>
        <button type="submit">新增</button>
        <button type="reset">重置</button>
        </td>
    </tr>
    <tr><td colspan="6"><hr></td></tr>
</form>

    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['weight']?></td>
        <td><?=$row['info']?></td>
        <td><?=$row['date']?></td>
        <td>
            <button onclick="document.location.href='?page=v2_crud&mdy=<?=$row['id']?>'">修改</button>
            <button onclick="document.location.href='?page=v2_crud&del=<?=$row['id']?>'">刪除</button>
        </td>
    </tr>
    <?php
    }
    ?>

</table>