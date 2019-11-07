<?php
session_start();
$db = new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset-utf8", "root", "");
date_default_timezone_set("Asia/Taipei");

//select SQL
function select($tableName, $where)
{ // 每個function是獨立的世界
    global $db; //透過 global把 $db宣告進此 function的世界
    $sql = "SELECT * FROM " . $tableName . " WHERE " . $where;
    return $db->query($sql)->fetchAll();
};

//insert SQL
function insert($ary, $tableName)
{
    global $db; //透過 global把 $db宣告進此 function的世界
    $feild = "id";
    $data = "null";
    foreach ($ary as $key => $value) {
        $feild .= "," . $key;
        $data .= ",'" . $value . "'";
    }
    $sql = "INSERT INTO " . $tableName . " (" . $feild . ") VALUES (" . $data . ")";
    // $sql = "INSERT INTO ".$tableNam." (id,a,b,c) VALUES (null,1,2,3)";
    $db->query($sql);
    return $db->lastInsertId();
}

//update SQL
function update($ary, $tableName)
{
    global $db;
    foreach ($ary as $do => $data) {
        switch ($do) {
            case 'num+1':
                $sql = "UPDATE " . $tableName . " SET num=num+1 WHERE id=" . $data; // $data=對象id
                $db->query($sql);
                break;
            case 'num-1':
                $sql = "UPDATE " . $tableName . " SET num=num-1 WHERE id=" . $data; // $data=對象id
                $db->query($sql);
                break;
            default:
                foreach ($data as $key => $value) { // $data=陣列內容，結構為['id']=修改新值
                    $sql = "UPDATE " . $tableName . " SET " . $do . "='" . $value . "' WHERE id=" . $key;
                    $db->query($sql);
                }
                break;
        }
    }
}

// delete SQL
function delete($ary, $tableName)
{
    global $db;
    foreach ($ary as $do => $data) {
        switch ($do) {
            case 'del':
                foreach ($data as $value) {
                    $sql = "DELETE FROM " . $tableName . " WHERE id=" . $value;
                }
                break;
            case 'delat':
                $sql = "DELETE FROM " . $tableName . " WHERE " . $data;
                break;
        }
    }
}

// php轉址
function plo($link)
{
    return header("location:" . $link);
}

// js轉址
function jlo($link)
{
    return "location.href='" . $link . "'";
}
/* 呼叫寫法1
echo "<script>".jlo("http://www.kimo.ocm")."</script>"
*/
/* 呼叫寫法2
<script>
<?=jlo("http://www.kimo.ocm")?>
</script>*/

//file upload
function addfile($file)
{
$newname = time() . "_" . $file['name'];
copy($file['tmp_name'], "upload/" . newname);
return $newname;
}

//分頁導覽 pageNav 提供資料表名稱、條件、一頁要幾個、目前在哪頁
function navpage($tabelName, $where, $range, $nowpage)
{
$result = select($tabelName, $where);
$total = count($result);
$many = ceil($total / $range);

$pg['<<']=($nowpage==1) ? 1 : $nowpage - 1; for ($i=1; $i <=many; $i++) $pg[$i]=$i; $pg['>>'] = ($nowpage == $many) ?
    $many : $nowpage + 1;
    return $pg;
    }