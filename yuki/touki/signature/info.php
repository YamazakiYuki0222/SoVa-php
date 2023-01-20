<?php 
  
  $company_number = $_POST['company_number'];
  /*法人番号のうち、最初の数値を除いた12桁のものが$company_number2 */
  $company_number2 = substr($company_number,1);
  $company_address = $_POST['company_address'];
  $president_name_kana = $_POST['president_name_kana'];
  $president_name = $_POST['president_name'];
  $president_address = $_POST['president_address'];
  $new_name = $_POST['new_name'];
  $date = $_POST['date'];
  $birthday_president = $_POST['birthday_president'];
  $post = $_POST;

  $date_explode = explode('-',$date);
  $birthday_president_explode = explode('-',$birthday_president);

  $date_year = $date_explode[0];
  $date_month = $date_explode[1];
  $date_day = $date_explode[2];

  function dd($param) {
    echo "<pre>";
    var_dump($param);
    exit;
  }
   

  /*和暦を表示させる関数
   *@param 和暦を計算するための配列がparamに入ってくる
   *@return 令和２年10月1日のような形式の文字列を返す
   */
   function wareki(array $param):string
  {
   if (!empty($param[0])) {
    $res_y = $param[0] - "2018";
    $res_m = month_if($param[1]);
    $res_d = date_if($param[2]);

    $ret = '令和'.$res_y.'年'.$res_m.'月'.$res_d.'日';
   } 
   else
   {
    $ret =  '';
   }
   return $ret;
  }
  
  /*入力された日付のうち、１桁の月を表示する関数
   *「01月」と表示されるところを「1月」と表示するためのもの
   *@param 01月とうような文字列が入ってくる
   *@return 1月というような先頭の0を取った文字列を返す
   */

  function month_if(string $param):string
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
  

  /*入力された日付のうち、１桁の日を表示する関数
   *「01日」と表示されるところを「1日」と表示するためのもの
   * @param 01日というような文字列が入ってくる
   * @return 1日というような先頭の0を取った文字列を返す
   */
  function date_if(string $param):string
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
