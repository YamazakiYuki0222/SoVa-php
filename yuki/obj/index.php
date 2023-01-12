<?php 

//インスタンス化する or オブジェクト化する or newする or オブジェクトにする or 実体化する
$human = new human('nagasaki');
$res = $human->look('密漁');
echo $res;




class human {

    //インスタンス変数
    public $name = "yuki";
    public $look = '見た';

    //コンストラクタ or 初期化 or イニシャライズ
    public function __construct($param) {
      $this->name = $param; 
    }

    public function look($param){

      $reaction = $this->gard_bad_thing($param,$this->look);
      $ret_raw = $param . "をみました";

      $ret = $ret_raw . $reaction;

      return $this->name.'は'.$ret;
    
    }

    public function gard_bad_thing($param,$verb) {
      if ($param == '密漁') {
        return $verb.'が、なかったことにします';    
      } 
    
    }
  
  }





?>
