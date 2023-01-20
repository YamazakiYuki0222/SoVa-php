<?php 
  require_once('info.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <title></title>
  <script>
  $(function(){

    var t2_length = $('#t2').text().length;
    if (t2_length > '50'){
      $('#t2').addClass('size_change');
    };

    var t8_length = $('#t8').text().length;
    if (t8_length > '100'){
      $('#t8').addClass('size_change');
    };

  });

    
  </script>

</head>
<body>
  <div id="wrapper">
    <div id="t1">
      <p><?= $new_name; ?></p>
    </div>
    <div id="t2">
      <p><?= $company_address; ?></p>
    </div>
    <div id="t3">
      <!--資格「代表取締役」に丸を付すためのもの--!>
    </div> 
    <div id="t4">
      <p><?= $president_name; ?></p>
    </div>
    <div id="t5_1">
      <p><?= $birthday_president_explode[0]; ?></p>
    </div>
    <div id="t5_2">
      <p><?= month_if($birthday_president_explode[1]); ?></p>
    </div>
    <div id="t5_3">
      <p><?= date_if($birthday_president_explode[2]); ?></p>
    </div>
    <div id="t6">
      <p><?= $company_number2; ?></p>
    </div>
    <div id="t7"> 
    <!--「印鑑提出者本人」のチェックマーク--!>
    </div>
    <div id="t8">
      <p><?= $president_address; ?></p>
    </div>
    <div id="t9">
      <p><?= $president_name_kana; ?></p>
    </div>
    <div id="t10">
      <p><?= $president_name; ?></p>
    </div>


  </div>
</body>
</html>
