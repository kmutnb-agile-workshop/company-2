<?php
require 'vendor/autoload.php';
require 'DbConnection.php';

final class User {

  public function topup($tel,$amount){
      $db = DbConnection::getConnection();
      $rs = $db->Execute("UPDATE user SET Balance = Balance + ".(int)$amount." WHERE Tel='".$tel."'");
      if($rs){
        echo " การเติมเงินเสร็จสมบูรณ์";
      }
  }

}
