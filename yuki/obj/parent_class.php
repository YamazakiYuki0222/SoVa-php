<?php 
class parent_class {
  
  public $shop = "";
  public function __construct() {
    $this->shop = "蕎麦屋";
  
  }
  /*publicの他にもprotectedやprivateがある
   *protecetdは継承先までしか使えない
   *privateは自身のクラス内でしか使えない
   *protectedとprivate関数は先頭に_がつく
   *例えば_get_shop()など。
   *これは習慣としてつける人がおおい。
   */
  public function get_shop($function,$param) {
    $ret = $function($param);
    return $this->shop;
  }

}





?>
