<?php
    //print_r($_POST);

    //is_array($_POST['name']);//【檢查陣列的函式】對象如果是陣列，return布林為true

    if(!empty($_POST['del'])&&!is_array($_POST['name'])){
    $sql="DELETE FROM ch8_animal WHERE id=".$_GET['del'];
    $db->query($sql);
   header("location:?page=v3_crud");
}


if(!empty($_POST && is_array($_POST['name']))){
    $sql="INSERT INTO ch8_animal VALUES(NULL,'".$_POST['name']."',".$_POST['weight'].",'".$_POST['info']."',NOW())";
    $db->query($sql);
    header("location:?page=v3_crud");
}



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
<form method="post">

    <?php
    $sql="SELECT * FROM ch8_animal WHERE 1"; //for select to list
    $rows=$db->query($sql)->fetchAll();

    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><input type="text" name="name[<?=$row['id']?>]" value="<?=$row['name']?>"></td>
        <td><input type="number" name="weight[<?=$row['id']?>]" value="<?=$row['weight']?>"></td>
        <td><input type="text" name="info[<?=$row['id']?>]" value="<?=$row['info']?>"></td>
        <td><?=$row['date']?></td>
        <td>
            <button onclick="document.location.href='?page=v2_crud&del=<?=$row['id']?>'">刪除</button>
        </td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="6" align="center">
            <hr>
            <input type="submit" value="全部更新">
        </td>  
    </tr>
</form>
</table>