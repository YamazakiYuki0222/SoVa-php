<?php 
  /*
  $trip['country'] = 'japan';
  $trip['food'] = 'sushi';
  $trip['hotel'] = 'mitsui';
  $trip['trip'] = 'asakusa';

  foreach ($trip as $key => $val)
  {
    echo 1 . "<br>";
    echo $key . "<br>";
    echo 2 . "<br>";
    echo $val . "<br>";
    echo 3 . "<br>";
  }

   
    $trip['country'][] = 'JAPAN';
    $trip['country'][] = 'CHINA';
    $trip['country'][] = 'KOREA';

    foreach ($trip['country'] as $key => $val)
    {
      echo $key;
      echo $val;
    } 

   */

    $trip['country'][] = 'JAPAN';
    $trip['country'][] = 'CHINA';
    $trip['country'][] = 'KOREA';
    $trip['food'][] = 'apple';
    $trip['food'][] = 'apple';
    $trip['food'][] = 'orange';
    $trip['hotel'][] = 'parkhyat';
    $trip['hotel'][] = 'teikoku';
    $trip['hotel'][] = 'mitsui';
?> 
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>

<?php   
    foreach ($trip  as $key => $val):?>
    <h2>
       <?= $key; ?>
    </h2>

    <?php  foreach ($val as $key2 => $val2): ?>   
      <h3>
        <?= $key2; ?>
      </h3>
      <h3>
        <?= $val2; ?>
      </h3>
    <?php endforeach ?>
<?php endforeach ?>
    
  



  </body>

</html>

