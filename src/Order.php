<?php
require 'vendor/autoload.php';
require 'DbConnection.php';

final class Order {
  private $ItemId;
  private $ItemName;
  private $ItemPrice;

  // constructure
  public function __construct ($ItemId, $ItemName, $ItemPrice) {
    $this->ItemId = $ItemId;
    $this->ItemName = $ItemName;
	$this->ItemPrice = $ItemPrice;
  }

  // id getter
  public function getItemId () {
    return $this->ItemId;
  }

  // name getter
  public function getItemName () {
    return $this->getItemName;
  }
  
  // name getter
  public function ItemPrice () {
    return $this->ItemPrice;
  }


  // get one customer by id
  public static function getOrder ($ItemId) {
    // init db connection with parameters
	$OrderList = array();
	
	if($ItemId == "121130001"){
		
	}else if($ItemId =="121130002"){
		
	}else{
		
	}
    $OrderList[];

    // close connection
    $rs->Close();
    $db->Close();

    return $OrderList;
  }

  // insert new customer
  public static function createCustomer ($name) {
    // init db connection with parameters
    $params = array($name);
    $db = DbConnection::getConnection();
    $rs = $db->Execute('insert into customer(name) values(?)', $params);

    // set flag if success with return new customer id to caller
    $result = array('success' => false, 'id' => '');
    if ($rs) {
      $result = array('success' => true, 'id' => $db->Insert_ID());
    }

    // close connection
    $rs->Close();
    $db->Close();

    return $result;
  }
}
