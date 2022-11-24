<?php
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $employee = $_POST['employee'];
  $round = $_POST['round'];
  $point = 0;
  $kinds = 0;
  if ($employee == 1)
  {
      $kinds = $kinds + 1;
      $point = $point + 1;
  } elseif($employee == 2) 
  {
      $kinds = $kinds + 2;
      $point = $point + 2;
  } elseif($employee == 3) 
  {
      $kinds = $kinds + 3;
      $point = $point + 3;
  } else {
      
  }

  //---------みたいな感じで診断をしておき
  if ($point == 1 and $kinds == 1) 
  {
     $recomend['name'] = "sova";
     $recomend['intro'] = "あなたにはsovaがおすすめです。なぜなら小さいからです。";
  } else{
     $recomend['name'] = "大手会計事務所";
     $recomend['intro'] = "あなたには大手の会計事務所ががおすすめです。なぜなら大きいからです。";
     
  }

?>
<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
   <div id="personal">
      <div class="personal__block">
        <div>名前</div><div class="block__content"><?= $name ?></div>
      </div>
      <div class="personal__block">
        <div>電話</div><div class="block__content"><?= $name ?></div>
      </div>
      <div class="personal__block">
        <div>メール</div><div class="block__content"><?= $named ?></div>
      </div>
      <div class="personal__block itadaita">
        <div>個人情報はいただいた！</div>
      </div>
      
   </div>
   <div id="sindan">
      <p>あなたにぴったりの会計事務所は...</p>
      <div><?= $recomend['name'] ?></div>
      <div><?= $recomend['intro'] ?></div>
   </div>
</div>
</body>
</html>

