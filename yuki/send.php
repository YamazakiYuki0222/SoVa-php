<?php
  $name = $_GET['name'];
  $age = $_GET['age'];
  $email = $_GET['email'];
  $address = $_GET['address'];
  
  //最近の配列のよくある書き方
  $test = ['tokyo','osaka','saitama','chiba'];

  $intro = '';
  $chara = '';
  $shai_flg = false;
  $sova_flg = false;
  //ケース1
  if ($name == 'yamaken')
  {
    $intro = "sovaの株主です";
  }

  //ケース2
  if ($name == 'yamaken')
  {
    $intro = "sovaの代表です";
  }
  elseif ($name == 'ide')
  {
    $intro = "ディズニーからきました";
  }
  elseif ($name == 'nishihara')
  {
    $intro = "底なしのメンタル";
  }


  //ケース３
  if ($name == 'yamaken') {
    $chara = '意外と女性関係は・・・';
  } else {
    $chara = 'やまけんしかわかりません';
  }

  //三項演算子
  if ($name == 'tadao' && $name == 'j') 
  {
    $intro ='デザイナーですね';
  }


  //情弱用
  if ($name == 'itsuki' && $age == 24 ) 
  {
    $shai_flg = true;
  }

  if ($address == '日本橋3-9-7')
  {
    $sova_flg = true;
  }


?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  
  </head>
  <body>
    名前「<?php echo $name; ?>」<br>
    年齢「<?php echo $age; ?>」<br>
    メール「<?php echo $email;?>」<br>
    住所「<?php echo $address;?>」<br>

    <?php echo $name ?>さんって人知ってますか?<br>
    「<?php echo $intro; ?>」<br>
    あと秘密があって「<?php echo $chara; ?>」<br>


    <?php if ($shai_flg == true) { ?>
    <div style="background-color:red;color:white;text-align:center;text-weight:bold;">
      <p>
        SoVaのことを知らないと思うので紹介しますね<br> 
        SoVaとは9800円でなんでもバックオフィスをやっちゃう<br>
        しかもバーチャルでやっちゃう<br>
        会計事務所なんですよ。<br>
<?php if ($sova_flg):  ?>
         <strong>実はめっちゃ裏では人が頑張っています</strong> 
<?php endif; ?>

　　　</p>

    </div>
    <?php } ?>




  </body>



</html>
