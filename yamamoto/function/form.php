<!doctype html>
<html>
  <head>
   <meta charset="utf-8">
  </head>
  <body>
    とりたいタイトルのURLを貼り付けてください<br>
    <?php  if (!empty($_GET['error'])): ?>

    <div style="border:1px solid red;color:red;">
        入力してください
     </div>
    <?php endif ?>
    <form action="index.php" method="post">
       <input type="text" name="url">
       <input type="submit" value="送信">
    </form>

  </body>
</html>
