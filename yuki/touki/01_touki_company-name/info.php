<?php 
  $new_name_kana = $_POST['new_name_kana'];
  $new_name = $_POST['new_name'];
  $date = $_POST['date'];
  $post = $_POST;

  $date_explode = explode('-',$date);

  $date_year = $date_explode[0];
  $date_month = $date_explode[1];
  $date_day = $date_explode[2];

  

  function wareki($param){
    $res_y = $param[0] - "2018";
    $res_m = month_if($param[1]);
    $res_d = date_if($param[2]);

    $ret = '令和'.$res_y.'年'.$res_m.'月'.$res_d.'日';
    return $ret;
  }
  
  

  function month_if($param)
  {
    if (substr($param,0,1) == '0')  
    {
      $ret =  substr($param,1,1);
    } 
    else 
    {
      $ret = $param;
    }
    return $ret;
  }

  function date_if($param)
  {
    if (substr($param,0,1) == '0')  
    {
      $ret =  substr($param,1,1);
    } 
    else 
    {
      $ret = $param; 
    }
    return $ret;
  }

?>
