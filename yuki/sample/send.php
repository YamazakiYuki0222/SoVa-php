<?php
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $employee = $_POST['employee'];
  $round = $_POST['round'];
  $point = 0;
  $Kinds = 0;
  $intro = 0;

  if ($employee == 1)
  {
    $kinds = $kinds + 1;
    $point = $point + 1;
  } elseif ($employee == 2)
  {
    $kinds = $kinds + 2;
    $point = $point + 2;
  } elseif ($employee == 3) 
  {
    $kinds = $kinds + 3;
    $point = $point + 3;
  } else 
  {
  
  }

  //ーーーーーーみたいな感じで診断をしておき
  if ($point == 1 and $kinds == 1) 
  {
    $recommend['name'] = "SoVa";
    $recommend['intro'] = "あなたにはSOVAがおすすめです。なぜなら小さいからです";
  } else 
  {
    $recommend['name'] = "大手";
    $recommend['intro'] = "あなたには大手事務所がおすすめです。なぜならでかいからです";

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
      <div>名前</div><div class="block__content"><?php echo $name;?></div>
      </div>
      <div class="personal__block">
      <div>電話</div><div class="block__content"><?php echo $tel;?></div>
      </div>
      <div class="personal__block">
      <div>メール</div><div class="block__content"><?php echo $email;?></div>
      </div>
      <div class="personal__block itadaita">
        <div>個人情報はもらった</div>
      </div>
    </div>
    <div id="shindan">
      <p>あなたにぴったりの会計事務所は</p>
      <div><?php echo $recommend['name']; ?></div>
      <div><?= $recommend['intro'] ?><div>


    </div>
  </div>





  </body>


</html>
