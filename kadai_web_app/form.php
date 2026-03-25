<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>社員情報入力フォーム</title>
</head>
<body>
    <h1>社員情報入力フォーム</h1>
    <form action="confirm.php" method="post">
        <table border="1">
            <tr>
                <th>社員名</th>
                <td>
                    <input type="text" name="employee_name" value="">
                </td>
            </tr>
            <tr>
                <th>年齢</th>
                <td>
                    <input type="text" name="employee_age" value="">
                </td>
            </tr>
            <tr>
                <th>所属部署</th>
                <td>
                    <select name="department">
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
