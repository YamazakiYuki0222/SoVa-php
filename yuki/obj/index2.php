<?php 
require_once('obj_client.php');
$client = new client();

function sova(){


}

$sova = function(string $param):string
{
  return "蕎麦関数の引数は".$param;
}

/*有名関数、無名関数は普通のphpの基礎ではやらない
 * これにてphpの基礎は完全に終了
 *
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?= $client->get_client_information(); ?>
<?= $client->get_shop(function(){
  return "蕎麦関数の引数は".$param;
} , 'デフォ'); ?>
</body>
</html>

