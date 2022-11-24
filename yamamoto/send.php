<?php
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  //配列の最近のよくある書き方
  $test = ['tokyo','osaka','saitama','chiba'];
  $intro = '';
  $chara = '';
  $shai_flg = false;
  //ケース１
  if ($name == 'yamaken' or 'yamamoto') 
  {
    $intro = "sovaの株主です。";
  }


  //ケース２
  if ($name == 'yamaken') 
  {
    $intro = "sovaの代表です";
  } 
  elseif ($name == 'ide' ) 
  {
    $intro = "ディズニーから来ました";
  } 
  elseif ($name == 'nishihara') 
  {
    $intro = '底なしの精神力を持っています';
  } 

  //ケース3
  if ($name == 'yamaken') {
     $chara = '意外と女性関係は..';
   } else {
      $chara = 'やまけんしかわかりません';
   } 
  //三項演算子
  if ($name == 'tadao' && $name == 'j')
  {
     $intro = 'デザイナーですね';
  }  
  //情弱用
  if ($name == 'itsuki')
  {
     $shai_flg = true ;
  }
  $sova_flg = false;
  if ($address == '日本橋本町3-9-7') 
  {
     $sova_flg = true;
  }
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
  名前「<?php echo $name; ?>」 <br>
  年齢「<?php echo $age; ?>」 <br>
  メール「<?php echo $email; ?>」 <br>
  住所「<?php echo $address;?>」 <br>
    </form>
<?php echo $name ?>さんって人知ってます？<br>
  「<?php echo $intro ;?>」
   <?php if ($shai_flg == true) { ?>  
   <div style="background-color:red; color:white;text-weight:bold;text-align:center;"> 
    <p>
       sovaのことを知らないと思うので紹介しますね。<br>
      sovaとは9800円でなんでもバックオフィスをやっちゃう<br>     しかもバーチャルでやっちゃう<br>
      会計事務所なんですよ。
      <?php if ($sova_flg): ?>
       <strong>実はめっちゃ裏では人がやってます</strong>
      <?php endif; ?>  
     </p>
    </div>
    <?php   }  ?>
  </body>
</html>
