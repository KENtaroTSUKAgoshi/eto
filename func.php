<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>組み込み関数を知る</li>
            <li>if文と文と関数を組み合わせておみくじを作る</li>
            <li>(演習)自由におみくじをアレンジする</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <?php
    
    // 日付表示
    // ※　アルファベット大文字小文字を間違えないでください。
    // 関数名()の形になっていることを確認してください。
    $today = date('Y/m/d H:i');
    $today2 = date('Y年m月d日 H時');

    echo $today;
    echo '<br>';
    echo $today2;
    echo '<br>';
    ?>

<?php
    $string = 'alphabet';
    $length = strlen($string);
    echo $string . 'の文字数は' . $length . '文字';
    echo "<br>";
    // 正確には、strlen() が返すのはバイト数であり、 文字数ではありません。
    // 日本語文字数の場合は、https://www.flatflag.nir87.com/strlen-671

    // ※trim...全角スペースは取り除かない。取り除くものは↓
    // https://www.php.net/manual/ja/function.trim.php
    // 全角対応は、str_replaceを利用する。
    $string2 = ' abcde '; // 前後にわざと半角スペースいれている
    var_dump($string2);
    echo '<br>';
    var_dump(trim($string2));

    // ランダムな数字を表示する(rand)
    // 第1引数は最小の数、第2は最大の数
    $rand = rand(1, 10);
    echo '<pre>';
    var_dump($rand);
    echo '</pre>';

    // おみくじ
    echo '<br>';
    if ($rand === 1) {
        echo '大吉';
    } else {
        echo '大凶';
    }
    ?>


</body>

</html>