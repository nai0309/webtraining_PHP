<?php
// print_r($_POST['name']);
if (!empty($_GET['del'])) { //如果有要殺資料
  echo $sql = "DELETE FROM ch8_animal WHERE id=" . $_GET['del'];
  $db->query($sql);
  header("location:?page=v3_crud");
}
// is_array($_POST['name']); //檢查陣列的函式，對象如果是陣列會return布林=>TRUE

if (!empty($_POST)&&!is_array($_POST['name'])) { //當偵測到POST有東西，屬於新增任務
  $sql = "INSERT INTO ch8_animal VALUES(null,'" . $_POST['name'] . "'," . $_POST['weight'] . ",'" . $_POST['info'] . "',NOW())";
  //INSERT INTO ch8_animal VALUES(null,'石虎',32,'嘉義的生態保護動物，台灣製造十分稀少請友善愛護。',NOW())
  $db->query($sql);
  header("location:?page=v3_crud"); //轉址使POST初始化(沒東西)，避免F5會不斷新增
}

if (!empty($_POST)&&is_array($_POST['name'])) { //當偵測到POST有東西，屬於全部修改之任務
  print_r($_POST);
  // 大量更新SQL的任務，下回待續
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


  <tr>
    <td colspan="6">
      <hr>
    </td>
  </tr>
  <form method="post">
    <!--new insert's form表單-->
    <tr>
      <td>#</td>
      <td><input type="text" name="name"></td>
      <td><input type="number" name="weight"></td>
      <td><input type="text" name="info" style="width:100%"></td>
      <td><?=date("Y-m-d H:i:s") ?></td>
      <td>
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </tr>
  </form>
  <tr>
    <td colspan="6">
      <hr>
    </td>
  </tr>
  <form method="post">
    <?php
    //for select to 資料列表
    $sql = "SELECT * FROM ch8_animal WHERE 1";
    $rows = $db->query($sql)->fetchAll();

    foreach ($rows as $row) {
      ?>
      <tr>
        <td><?=$row['id']?></td>
        <td><input type="text" name="name[<?=$row['id']?>]" value="<?=$row['name']?>"></td>
        <td><input type="number" name="weight[<?=$row['id']?>]" value="<?= $row['weight']?>"></td>
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