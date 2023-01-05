<?php
require_once('parent_class.php');

class client extends parent_class {

    public $client_name;
    public $client_info;
    public function __construct(){
       parent::__construct();
       //確か、インスタンス化しないでも関数が使える..んだったかな。。
       //
       $param = $_GET['name'];
       if ($param == "field"){
          $ret['members'] = '15';
          $ret['outsorce'] = '10';
          $ret['address'] = 'tokyo shinjuku kamiochiai 3';
          $ret['sales'] = '500,000,000';
          $ret['industory'] = 'it';
       } elseif($param == 'sevengarden') {
          $ret['members'] = '8';
          $ret['outsorce'] = '15';
          $ret['address'] = 'tokyo kyobashi';
          $ret['sales'] = '400,000,000';
          $ret['industory'] = 'realestate';
    
       } elseif($param == 'fairyjump') {
          $ret['members'] = '1';
          $ret['outsorce'] = '0';
          $ret['address'] = 'tokyo nakano';
          $ret['sales'] = '3,000,000';
          $ret['industory'] = 'marketing';
       } else {
          $ret['members'] = 'no data';
          $ret['outsorce'] = 'no data';
          $ret['address'] = 'no data';
          $ret['sales'] = 'no data';
          $ret['industory'] = 'no data';
          
       } 
       $this->client_name = $param;
       $this->client_info = $ret;
    }
  
    public function get_client_name(){
       return $this->client_name;
    }
    public function get_client_members(){
       return $this->client_info['members'];
    }
    public function get_client_outsorce(){
       return $this->client_info['outsorce'];
    }
    public function get_client_address(){
       return $this->client_info['address'];
    }
    public function get_client_sales(){
       return $this->client_info['sales'];
    }
    public function get_client_industory(){
       return $this->client_info['industory'];
    }

    public function get_client_infomation(){
       return $this->client_name . "は、従業員数が".
              $this->get_client_members()."で、外注が".
              $this->get_client_outsorce()."で、住所が".
              $this->get_client_address()."で、売上が".
              $this->get_client_sales(). "で、業界は".
              $this->get_client_industory()."です";
    }


}
?>
