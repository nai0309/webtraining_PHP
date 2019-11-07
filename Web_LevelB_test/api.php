<?php
require_once('sql.php');
switch ($_GET['do']) {
    case 'check':
        // print_r($_POST);
        $result = select("q1t10_admin", "acc='" . $_POST['acc'] . "' AND pwd='" . $_POST['pwd'] . "'");
        if ($result) {
            $_SESSION['admin'] = $_POST['acc'];
            plo("admin.php");
        } else {
            echo "
            <script>
            alert('帳號密碼錯誤!!');" . jlo('login.php') . "
            </script>";
        }
        print_r($result);
        break;
}