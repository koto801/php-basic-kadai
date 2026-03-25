<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数の定義
        function sort_2way($array, $order) {
            if ($order === TRUE) {
                // 昇順ソート
                sort($array);
                echo "昇順ソート<br>";
            } else {
                // 降順ソート
                rsort($array);
                echo "降順ソート<br>";
            }

            // ソート結果を1行ずつ表示
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートで呼び出し
        sort_2way($nums, TRUE);

        echo "<br>";

        // 降順ソートで呼び出し
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
