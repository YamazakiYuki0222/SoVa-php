<?php
  session_start();

  require_once('php_function.php');  
  
  $name = $_POST['name'];  
  $tel = $_POST['tel'];  
  $email = $_POST['email'];  

  $post = $_POST;

  $res = introduce($post);
  $login = login($post); 
  
  echo $login;

  echo $res;







?>
<a href="form3.php">
