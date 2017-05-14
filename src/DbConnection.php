<?php
require 'vendor/autoload.php';

final class DbConnection {
  public static function getConnection () {


    $development = array("driver"=>"mysqli", "server"=>"localhost", "user"=>"root", "password"=>"", "database"=>"com1");
    $production = array("driver"=>"mysqli", "server"=>"54.169.158.243", "user"=>"root", "password"=>"1qaz2wsx", "database"=>"agile-php");


    $config = $production;
    if (empty($_SERVER['SERVER_NAME'])) {
      $config = $development;
    }else if ($_SERVER['SERVER_NAME'] == 'localhost') {
      $config = $development;
    }

    $db = ADONewConnection($config['driver']);
    $db->debug = false;
    $db->Connect($config['server'], $config['user'], $config['password'], $config['database']);
    return $db;
  }
}
