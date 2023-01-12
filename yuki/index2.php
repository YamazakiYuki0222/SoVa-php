<?php
  $name = "yamaken";
  $age = 29;
  $address = "tokyo";
  $email = "yamaken@gmail.com";

  $animal['favorite'] = "dog";
  $animal['dislike'] = "cat";
  $animal['have'] = "hamster";

  $animal2 = array('favorite' => 'dog','dislike' => 'cat','have' => 'ham');

  $animal3[] = "dog";
  $animal3[] = "cat";
  $animal3[] = "ham";

  echo $animal['have'];

  $pref['tokyo']['shinjyuku']['hotel'] = "グレースリーホテル";
  $pref['tokyo']['shobuya']['restaurant'] = "あじゅうた";
  $pref['tokyo']['aoyama']['restaurant'] = "鮨あき";


  echo $pref['tokyo']['shinjyuku']{'restaurant'};

  $shinjyuku_restaurant[] = '真一館';
  $shinjyuku_restaurant[] = 'おはじき';
  $shinjyuku_restaurant[] = 'zauo';
  $pref['tokyo']['shinjyuku']['restaurant'] = $shinjyuku_restaurant;
  
  $Ab__CDDDD___CCC['test'] = "a";

  echo"<pre>";
  var_dump($pref);
  exit;
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  
  </head>
  <body>
  <p>名前は<?php echo $name; ?></p>
　<p>年齢は<?php echo $age; ?></p>
　<p>住所は<?php echo $address; ?></p>
  <p>メールは<?php echo $email; ?></p>



  </body>
</html>
