<?php
function h( $str ){
    return htmlspecialchars($str,ENT_QUOTES, "UTF-8");
}
function eto( $year ){
    $etos = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
    return $etos [($year -4) % 12];
}
    $year = filter_input(INPUT_GET,"year",FILTER_VALIDATE_INT);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>干支確認</title>
</head>
<body>
    <h1>干支の確認をする</h1>
    <h2>西暦を入力する</h2>
</body>

</html>

<?php if (empty($year)): ?>
    <form method="get">
        <label>年 </label>:
        <input name="year" type="number" value="<?= h(date("Y")) ?>">
        <input type="submit" value="送信">
    </form>
    <?php else: ?>
        <p><?= h($year) ?>年は<?= eto($year) ?>年です</p>
        <?php endif; ?>