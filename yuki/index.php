<?php
  //文字残せるよ
  $name = "yamamoto";
  $age_number = 39;
  $age_string = "39";
  /*
   * ここからechoだよ
   */
  echo "sova<br>";
  echo "39<br>";
  echo 39 . "<br>";
  echo "sova"."soup". "<br>";
  echo $name . "<br>";
  echo $age_number . "<br>";
  echo $age_string ."<br>";

?>
<h1>見出し</h1>
<h2>
<?php
  echo "second";
  echo $name;

?>
<?php echo "third"; echo "fourth";   ?>
</h2>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  
  </head>
  <body>
    htmlだよ
    <br>
<a href="/index2.php">次のページへ</a>
<a href="/form.php">フォーム</a>






  </body>



</html>
