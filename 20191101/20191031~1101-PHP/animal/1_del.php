<!-- <h1>這是1_del.php</h1> -->

<?php
if (!empty($_POST)) { //POST有值才做{}，同等於表單提交之後的處理{}
    //print_r($_POST);
    echo $sql="DELETE FROM ch8_animal WHERE id=".$_POST['id'];
    $db->query($sql);
   header("location:?page=v1_show");
}
?>

<div style="width:50vw; margin:20px auto; background:#eee; text-align:center; padding:10px;">
    <h1>刪除動物資料 Ver1</h1>
    <form action="" method="post">
        <h3>指定編號</h3>
        <p><input type="number" name="id"></p>
        <p>
            <input type="submit" value="刪除">
            <input type="reset" value="重置">
        </p>
    </form>
</div>
