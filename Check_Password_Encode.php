<?php

if (isset($_POST['btn_submit_1'])) {
    $pass_1 = $_POST['pass_1'];
    $pass_4 = $pass_1;
    $pass_2 = password_hash($pass_1,PASSWORD_DEFAULT);
    $pass_3 = password_verify($pass_1,$pass_2);
    if($pass_3 == "0"){
        $pass_3_t = "正しく変換できていません。";
    }
    if($pass_3 == "1"){
        $pass_3_t = "正しく変換できます。";
    }
    echo "<br>" . $pass_4 . "<br><br>";
    echo $pass_2 . "<br><br>";
    echo $pass_3_t . "<br><br>";
}

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>パスワードエンコード</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="pass_1"><br>
            <input type="submit" name="btn_submit_1">
        </form>
    </body>
</html>
