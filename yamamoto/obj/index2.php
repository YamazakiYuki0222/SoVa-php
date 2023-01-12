<?php
require_once('obj_client.php');
$client = new client();


$nagasaki = function()
{
   return "nagasakidesu";
}

$nagasaki();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?=  $client->get_client_infomation(); ?>


<?= $client->get_shop( function(){
  return "aaa";

}  , 'aaa')

</body>
</html>



