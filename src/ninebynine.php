<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>九九表</title>
</head>

<body>
    <h4>0J0X0XX神戸電子</h4> <!-- 注意：自分の出席番号と氏名に変更すること -->
    <hr>
    </br>
    <?php
    // ここからPHPのコードを記述する（1行ではない）
    for ($i = 1; $i < 10; $i++) {
        echo "<p>";
        for ($j = 1; $j < 10; $j++) {
            echo $i * $j;
        }
        echo "</p>";
    }

    ?>
</body>

</html>