<?php
// GETで送られてきた名前とアドレスのデータを受け取る
// まずは、var_dump($_GET);で見てみる。
// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

// $_GETの中身を変数に移動
$name = $_GET['name'];
$mail = $_GET['mail'];
?>

<html>

<head>
    <meta charset="utf-8">
    <title>GET練習（受信）</title>
</head>

<body>
　   
    <p>お名前：<?= $name ?></p>
    <p>Mail：<?= $mail ?> </p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
