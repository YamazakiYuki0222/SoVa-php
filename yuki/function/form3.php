<?php 

session_start();

if(empty($_SESSION['login_key'])) 
{
  header('Location: http://127.0.0.1:8080/function/form2.php');

}

echo "みれています";





?>
