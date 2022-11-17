<?php
  $name = $_GET['name'];
  $age = $_GET['age'];
  $email = $_GET['email'];
  $address = $_GET['address'];
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
  </body>
</html>
