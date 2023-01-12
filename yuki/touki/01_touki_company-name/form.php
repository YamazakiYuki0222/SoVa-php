<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="touki.php" method="post">
    <h2>商号変更について</h2>
    <p>新しい会社名を教えてください</p>
    フリガナ<input type="text" name="new_name_kana"><br>
    会社名<input type="text" name="new_name">
    <p>会社名を変更した日付を教えてください</p>
    変更日<input type="date" name="date"><br><br>
    <input type="submit" value="この情報で作成する">
  </form>
</body>
</html>
