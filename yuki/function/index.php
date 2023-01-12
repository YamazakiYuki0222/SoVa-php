<?php 
  
  $string = "hello";

$ret = strtoupper($string);
$ret2 = str_shuffle($ret);
$ret3 = explode('O' , $ret2);


if (empty($_POST['url'])) {
  header("Location:http://127.0.0.1:8080/foreach/function/form.php?error=1");
  exit;
}


$url = $_POST['url'];
$ret4 = file_get_contents($url);
$param = explode('<title>' ,$ret4);
$param2 = explode('</title>',$param[1]);


var_dump($param2[0]);


?>
