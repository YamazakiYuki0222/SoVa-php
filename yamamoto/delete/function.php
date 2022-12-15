<?php


function introduce($param) {
   echo  "名前は".$param['name']."で、電話は".$param['tel']."で、メールは".$param['email']."スパムの可能性は".show_spam($param['tel']);

}

function show_spam($param){
   if (substr($param,0,1) != 0 or empty($param['tel'])) {
      return "あります";
   } else {
      return "ありません";
   }

}
