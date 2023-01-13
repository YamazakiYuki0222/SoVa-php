<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="index.php" method="post">
    <h2>会社情報について</h2>
    Q1.会社法人番号<input type="text" name="company_number" placeholder="1234567890123"><br>
    Q2.会社住所<input type="text" name="company_address" placeholder="東京都港区三田9-99-99"><br>
    Q3.代表取締役のお名前<input type="text" name="president_name" placeholder="蕎麦一郎"><br>
    Q4.代表者の連絡先<input type="text" name="president_tel" placeholder="09099999999"><br>
    Q5.管轄の法務局<input type="text" name="lab" placeholder="さいたま地方">法務局<br>

    <h2>商号変更について</h2>
    <h3>もとの会社名を教えてください</h3>
    Q6.フリガナ<input type="text" name="old_name_kana" placeholder="カブシキカイシャオルド"><br>
    Q7.会社名<input type="text" name="old_name" placeholder="株式会社OLD"><br>
    <h3>新しい会社名を教えてください</h3>
    Q8.フリガナ<input type="text" name="new_name_kana" placeholder="カブシキカイシャニューサンプル"><br>
    Q9.会社名<input type="text" name="new_name" placeholder="株式会社NEW Sample">
    <h3>会社名を変更した日付を教えてください</h3>
    Q10.変更日<input type="date" name="date"><br><br>
    <input type="submit" value="この情報で作成する">
  </form>
</body>
</html>
