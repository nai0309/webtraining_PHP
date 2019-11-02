<?php
// 宣告資料庫連線
$dblink=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","",null);//db info, user, password, option(選填)

//*********建立table***********
// $sqlcode="CREATE TABLE php_10804.ch8_animal 
//     ( 
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
//     name TEXT NOT NULL ,
//     weight INT NOT NULL ,
//     info TEXT NOT NULL ,
//     date DATETIME NOT NULL ,
//     PRIMARY KEY  (id)
//     )
//     ENGINE = InnoDB;";//ENGINE = InnoDB;可寫可不寫

//$result=$dblink->query($sqlcode);

//***************** INSERT ***************
//$sqlcode="INSERT INTO ch8_animal VALUES(null, '熊貓',125,'黑白相間的熊熊',NOW())";
//$result=$dblink->query($sqlcode);

//***************** UPDATE ***************
//$result=$dblink->query("UPDATE ch8_animal SET weight=185 WHERE name='熊貓'");

//***************** DELETE ***************
//$result=$dblink->query("DELETE FROM ch8_animal WHERE id=1");

//***************** SELECT ***************
//先PDO指令新增4組動物
// $sql="INSERT INTO ch8_animal VALUES
//     (null,'狸貓',50,'貓科動物',NOW()),
//     (null,'摺耳貓',30,'耳朵摺起來的貓貓',NOW()),
//     (null,'鬥牛犬',26,'有分英國、法國、美國等不同品種',NOW()),
//     (null,'倉鼠',6,'會把便便藏在囊夾',NOW());";
// $result=$dblink->query($sql);

$sql="SELECT * FROM ch8_animal WHERE 1";
//query提交指令
$result=$dblink->query($sql); //如果是select,這行指令已經取得了對象，但要另外用其他方式取得

//$result=$dblink->query($sqlcode);
//var_dump($result); //當指令處理失敗會得到一個布林值false
if(!$result){// 檢查錯誤訊息的作法
    $err_msg=$dblink->errorinfo();
    print_r($err_msg);
}

//fetch vs fetchAll，前者只拿一筆資料(一維陣列)回傳，後者是全部資料接住(用二維陣列)回傳

// $row=$result->fetch();
// //print_r($row);
// echo $row['name']."<br>";

// $row=$result->fetch();
// echo $row['name']."<br>";

// while($row=$result->fetch()){
//     echo $row['name']."<br>";
// }

// $rows=$result->fetchAll();
// //print_r($rows);
// foreach($rows as $row){
//     echo $row['name']."<br>";
// }

    // $sql="SELECT * FROM ch8_animal WHERE 1";
    // $rows=$dblink->query($sql)->fetchAll();
    // print_r($rows);


?>

<style>
table, tr, th, td {
    border:1px solid black;
    border-spacing:0;
}

tr, th, td {
    padding: 5px;
}
.center {
    text-align: center;
}

</style>
<?php

$sql="SELECT * FROM ch8_animal WHERE 1";
$rows=$dblink->query($sql)->fetchAll();
echo "<table>";
echo "<tr>
        <th>id</th>
        <th>name</th>
        <th>weight</th>
        <th>info</th>
        <th>date</th>   
    </tr>";
foreach($rows as $row){
    echo "<tr>";
    echo "<td class='center'>".$row['id']."</td>";
    echo "<td class='center'>".$row['name']."</td>";
    echo "<td class='center'>".$row['weight']."</td>";
    echo "<td>".$row['info']."</td>";
    echo "<td class='center'>".$row['date']."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<hr>";

echo "<table>";
echo "<tr>
        <th>id</th>
        <th>name</th>
        <th>weight</th>
        <th>info</th>
        <th>date</th>   
    </tr>";
foreach($rows as $row){
    echo 
    "<tr>
    <td class='center'>".$row['id']."</td>
    <td class='center'>".$row['name']."</td>
    <td class='center'>".$row['weight']."</td>
    <td>".$row['info']."</td>
    <td class='center'>".$row['date']."</td>
    </tr>";
}
echo "</table>";








?>

