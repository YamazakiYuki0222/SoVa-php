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
    <div id="t1">
      <?= $new_name; ?>
    </div>
    <div id="t2">
      <?= $company_address; ?>
    </div>
    <div id="t3">
      <?= $president_name; ?>
    </div>
    <div id="t4_1">
      <?= $birthday_president_explode[0]; ?>
    </div>
    <div id="t4_2">
      <?= $birthday_president_explode[1]; ?>
    </div>
    <div id="t4_3">
      <?= $birthday_president_explode[2]; ?>
    </div>
    <div id="t5">
      <?= $company_number2; ?>
    </div>
    <div id="t6">
      <?= $president_address; ?>
    </div>
    <div id="t7">
      <?= $president_name; ?>
    </div>
  </div>
</body>
</html>
