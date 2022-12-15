<?php
function introduce($param) 
{
   $res = is_spam($param['tel']);
   $res2 = spam_notice($res);

   $ret = "名前は".$param['name']."で、電話番号は".$param['tel']."で、メールは".$param['email']."です".$res2.show_ua();

   return $ret;
}

function is_spam($param){
   //$paramの先頭の文字を取得する
   $first_str = substr($param,0,1);

   //先頭の文字が0かそうでないかを確認する
   if ($first_str == 0)
   {
      //スパムじゃない
      $ret =  false;
   } else {
      //スパム
      $ret =  true;
   }

    //結果をreturnする
    return $ret;
}

function spam_notice($param) 
{
   if ($param) {
      $ret = "スパムの可能性があります";
   } else {
      $ret = "";
   }
   return $ret;
}

function dd($param){
  echo "<pre>";
  var_dump($param);
  exit;

}

function show_ua()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  //もし$uaの中にsafariがあったらsafari
  if(strpos($ua,'Safari') !== false){
     return "このユーザはsafariを使っています";
  }

  //もし$uaの中にchromeがあったらchrome
   


}

function login($param) {
  if ($param['name']=='yamamoto' && $param['email']=="yamamoto@field.asia")
  {
    $_SESSION['login_key'] = '1';
    return $_SESSION['login_key'];
  }

}




?>




