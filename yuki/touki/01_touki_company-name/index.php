<?php
require_once('info.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>
<body>
  <div id="wrapper">
    <div id="t1">
      <p>1234567890123</p>
    </div>
    <div id="t2_1">
      <p>カブシキガイシャソバ</p>
    </div>
    <div id="t2_2">
      <p>株式会社SoVa</p>
    </div>
    <div id="t2_3">
    <p><?= $new_name_kana;?></p>
    </div>
    <div id="t2_4">
    <p><?= $new_name;?>）</p>
    </div>
    <div id="t3">
      <p>東京都中央区日本橋本町３丁目９−７ Arc Cube 日本橋本町 3F</p>
    </div>
    <div id="t4">
      <div id="t4-1">
        <p>「商号」</p>
      </div>
      <div id="t4-2"><?= $new_name; ?></div>
    </div>
    <div id="t5">
      <div id="t5-1">
        <p>「原因年月日」</p>
      </div>
      <div id="t5-2">
      <p><?= wareki($date_explode); ?></p>
      </div>
    </div>
    <div id="t6">
      <p>10,000</p>
    </div>
    <div id="t7_1">
      <p><?= $date_year-"2018";?></p>
    </div>
    <div id="t7_2">
      <p><?= month_if($date_month);?></p>
    </div>
    <div id="t7_3">
      <p><?= date_if($date_day);?></p>
    </div>
    <div id="t8">
      <?= $new_name;?>
    </div>
    <div id="t9">
      <p>蕎麦一郎</p>
    </div>
    <div id="t10">
      <p>090-9999-9999</p>
    </div>
    <div id="t11">
      <p>さいたま地方</p>
    </div>




  </div>
</body>
</html>
