<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>確認画面</h1>
    <table border="1">
        <tr>
            <th>社員名</th>
            <td><?php echo htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <th>所属部署</th>
            <td><?php echo htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    </table>
    <br>

    <!-- 確定ボタン：complete.phpへPOST送信 -->
    <form action="complete.php" method="post">
        <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="department" value="<?php echo htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="submit" value="確定">
    </form>

    <!-- キャンセルボタン：form.phpへ戻る -->
    <form action="form.php" method="get">
        <input type="submit" value="キャンセル">
    </form>
</body>
</html>
