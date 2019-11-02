<!-- <h1>這是1_show.php</h1> -->
<?php
// $db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
$sql="SELECT * FROM ch8_animal WHERE 1";
$rows=$db->query($sql)->fetchAll();

?>
<table width="100%">
    <tr>
        <td>編號</td>
        <td>動物名稱</td>
        <td>重量</td>
        <td>簡介</td>
        <td>更新日期</td>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['weight']?></td>
        <td><?=$row['info']?></td>
        <td><?=$row['date']?></td>
    </tr>
    <?php
    }
    ?>

</table>