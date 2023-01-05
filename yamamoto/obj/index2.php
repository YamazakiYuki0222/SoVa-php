<?php
require_once('obj_client.php');
$client = new client();

function sova(){

}


$sova = function(string $param):string
{
   return "蕎麦関数の引数は".$param;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?=  $client->get_client_infomation(); ?>
<?= $client->get_shop(function(){
    return "蕎麦関数の引数は".$param; 
}, 'デフォ'); ?>
</body>
</html>



