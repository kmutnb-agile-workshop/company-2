<?php
require 'vendor/autoload.php';
require 'DbConnection.php';

final class User {

  public function topup($tel,$amount){
      $db = DbConnection::getConnection();
      $rs = $db->Execute("UPDATE user SET Balance = Balance + ".(int)$amount." WHERE Tel='".$tel."'");
      if($rs){
        return " การเติมเงินเสร็จสมบูรณ์";
      }
  }

  public function getUserInfo($_id){
      $db = DbConnection::getConnection();
      $rs = $db->Execute("SELECT * FROM user Where id = ".$_id);
      return $rs;
  }

}
