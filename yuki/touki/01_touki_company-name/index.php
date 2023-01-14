<?php
require_once('info.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <title></title>
</head>
<body>
  <div id="wrapper">
    <div id="blank_message">
      <?php if(empty($company_number)): ?>
        <p>Q1「会社法人番号」が未入力です</p>
      <?php endif;?>
      <?php if(empty($company_address)): ?>
        <p>Q2「会社住所」が未入力です</p>
      <?php endif;?>
      <?php if(empty($president_name)): ?>
        <p>Q3「代表取締役のお名前」が未入力です</p>
      <?php endif;?>
      <?php if(empty($president_tel)): ?>
        <p>Q4「代表者の連絡先」が未入力です</p>
      <?php endif;?>
      <?php if(empty($lab)): ?>
        <p>Q5「管轄の法務局」が未入力です</p>
      <?php endif;?>
      <?php if(empty($old_name_kana)): ?>
        <p>Q6「もとの会社名（フリガナ）」が未入力です</p>
      <?php endif;?>
      <?php if(empty($old_name)): ?>
        <p>Q7「もとの会社名」が未入力です</p>
      <?php endif;?>
      <?php if(empty($new_name_kana)): ?>
        <p>Q8「新しい会社名（フリガナ）」が未入力です</p>
      <?php endif;?>
      <?php if(empty($new_name)): ?>
        <p>Q9「新しい会社名」が未入力です</p>
      <?php endif;?>
      <?php if(empty($date_explode[0])): ?>
        <p>Q10「変更日」が未入力です</p>
      <?php endif;?>
    </div>
    <div id="t1">
    <p><?= $company_number;?></p>
    </div>
    <div id="t2_1">
    <p><?= $old_name_kana;?></p>
    </div>
    <div id="t2_2">
      <?php if(mb_strlen($old_name) > '20'):?>
        <div class="size_change">
      <?php endif;?>    
          <p><?= $old_name;?></p>
        </div>
    </div>
    <div id="t2_3">
    <p><?= $new_name_kana;?></p>
    </div>
    <div id="t2_4">
      <?php if(mb_strlen($new_name) > '20'):?>
        <div class="size_change">
      <?php endif;?>    
          <p><?= $new_name;?></p>
        </div>
    </div>
    <div id="t3">
      <?php if(mb_strlen($company_address) > '35'):?>
        <div class="size_change">
      <?php endif;?>
          <p><?= $company_address;?></p>
        </div>
    </div>
    <div id="t4">
      <div id="t4_1">
        <p>「商号」</p>
      </div>
      <div id="t4_2">
        <?php if(mb_strlen($new_name) > '20'):?>
          <div class="size_change">
        <?php endif;?>
            <?= $new_name; ?>
          </div>
      </div>
    </div>
    <div id="t5">
      <div id="t5_1">
        <p>「原因年月日」</p>
      </div>
      <div id="t5_2">
      <p><?= wareki($date_explode); ?></p>
      </div>
    </div>
    <div id="t6">
      <p>30,000</p>
    </div>
    <div id="t7">
      <p><?= wareki($date_explode); ?></p>
    </div>
    <div id="t8">
      <?php if(mb_strlen($new_name) > '20'): ?>
        <div class="size_change">
      <?php endif;?>
          <?= $new_name;?>
        </div>
    </div>
    <div id="t9">
    <p><?= $president_name;?></p>
    </div>
    <div id="t10">
    <p><?= $president_tel;?></p>
    </div>
    <div id="t11">
    <p><?= $lab;?></p>
    </div>




  </div>
</body>
</html>
