<?php
$company_infomation['companay_number'] = "1234567890123";
$company_infomation['companay_address'] = "東京都中央区日本橋本町3-9-7 ";
$company_infomation['president_name_kana'] = "ソバイチロウ";
$company_infomation['president_name'] = "蕎麦一郎";
$company_infomation['president_address'] = "東京都千代田区麹町3-7-9";
$company_infomation['lab'] = "東京";






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="index.php" method="post">
    <h2>会社情報について</h2>
    <p><label>Q1.会社法人番号</label><input type="text" name="company_number" value="<?=$company_infomation['company_number'] ?>" placeholder="1234567890123"></p>
    <p><label>Q2.会社住所</label><input type="text" name="company_address" value="<?=$company_information['company_address'] ?>" placeholder="東京都港区三田9-99-99"></p>
    <p><label>Q3.代表取締役のお名前(フリガナ)</label><input type="text" name="president_name_kana" value="<?=$company_information['president_name_kana'] ?>" placeholder="ソバイチロウ"></p>
    <p><label>Q4.代表取締役のお名前</label><input type="text" name="president_name" value="<?=$company_information['president_name'] ?>" placeholder="蕎麦一郎"></p>
    <p><label>Q5.代表取締役の住所</label><input type="text" name="president_address" value="<?=$company_information['president_address']?>"placeholder="東京都千代田区麹町9-99-9"></p>
    <p><label>Q6.代表取締役の生年月日</label><input type="date" name="birthday_president"></p>
    <h3>新しい会社名を教えてください</h3>
    <p><label>Q7.会社名</label><input type="text" name="new_name" placeholder="株式会社NEW Sample">
    <h3>会社名を変更した日付を教えてください</h3>
    <p><label>Q8.変更日</label><input type="date" name="date"></p>
    <input type="submit" value="この情報で作成する">
  </form>
</body>
</html>
