<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  
  </head>
  <body>
  あなたにぴったりの会計事務所を探しましょう
  <form action="send.php" method="post">
    名前<input type="text" name="name"><br>
    電話番号<input type="text" name="tel"><br>
    メール<input type="text" name="email"><br>
    <br><br>
    従業員は何名ですか?<br>
    <input type="radio" name="employee" value="1">いない<br>
    <input type="radio" name="employee" value="2">1名~5名<br>
    <input type="radio" name="employee" value="3">15名~20名<br>
    <input type="radio" name="employee" value="4">21名~<br>
    <br>
    現在何期目ですか?<br>
    <input type="radio" name="round" value="1">登記中です<br>
    <input type="radio" name="round" value="2">1年~3年<br>
    <input type="radio" name="round" value="3">5年~10年<br>
    <input type="radio" name="round" value="4">10年~<br>


    <input type ="submit" value="送信">


  </form>





  </body>



</html>
